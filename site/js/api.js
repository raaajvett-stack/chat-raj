// API handling functions for the Car Report System

/**
 * Make an API request
 * @param {string} endpoint - API endpoint
 * @param {string} method - HTTP method (GET, POST, PUT, DELETE)
 * @param {Object} data - Data to send (for POST/PUT requests)
 * @returns {Promise} - Promise resolving to the API response
 */
async function apiRequest(endpoint, method = 'GET', data = null) {
    const url = `${config.apiBaseUrl}/${endpoint}`;
    
    const options = {
        method: method,
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        timeout: config.apiTimeout
    };
    
    if (data && (method === 'POST' || method === 'PUT')) {
        options.body = JSON.stringify(data);
    }
    
    try {
        const response = await fetch(url, options);
        
        // Check if the response is ok (status in the range 200-299)
        if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.message || 'حدث خطأ أثناء الاتصال بالخادم');
        }
        
        return await response.json();
    } catch (error) {
        console.error('API Request Error:', error);
        throw error;
    }
}

/**
 * Get reference data (vehicle types, manufacturers, colors)
 * @returns {Promise} - Promise resolving to reference data
 */
async function getReferenceData() {
    try {
        return await apiRequest('reference-data/all');
    } catch (error) {
        console.error('Error fetching reference data:', error);
        throw error;
    }
}

/**
 * Submit a missing car report
 * @param {Object} reportData - Missing car report data
 * @returns {Promise} - Promise resolving to the created report
 */
async function submitMissingCarReport(reportData) {
    try {
        return await apiRequest('missing-cars', 'POST', reportData);
    } catch (error) {
        console.error('Error submitting missing car report:', error);
        throw error;
    }
}

/**
 * Submit a found car report
 * @param {Object} reportData - Found car report data
 * @returns {Promise} - Promise resolving to the created report
 */
async function submitFoundCarReport(reportData) {
    try {
        return await apiRequest('found-cars', 'POST', reportData);
    } catch (error) {
        console.error('Error submitting found car report:', error);
        throw error;
    }
}

/**
 * Search for reports by report number
 * @param {string} reportNumber - Report number to search for
 * @returns {Promise} - Promise resolving to search results
 */
async function searchByReportNumber(reportNumber) {
    try {
        return await apiRequest(`search/report/${reportNumber}`);
    } catch (error) {
        console.error('Error searching by report number:', error);
        throw error;
    }
}

/**
 * Search for reports by phone number
 * @param {string} phone - Phone number to search for
 * @returns {Promise} - Promise resolving to search results
 */
async function searchByPhone(phone) {
    try {
        return await apiRequest(`search/phone/${phone}`);
    } catch (error) {
        console.error('Error searching by phone:', error);
        throw error;
    }
}

/**
 * Get report details by ID and type
 * @param {string} id - Report ID
 * @param {string} type - Report type ('missing' or 'found')
 * @returns {Promise} - Promise resolving to report details
 */
async function getReportDetails(id, type) {
    try {
        const endpoint = type === 'missing' 
            ? `missing-cars/id/${id}` 
            : `found-cars/id/${id}`;
        
        return await apiRequest(endpoint);
    } catch (error) {
        console.error('Error fetching report details:', error);
        throw error;
    }
}

/**
 * Show an alert message
 * @param {string} message - Message to display
 * @param {string} type - Alert type ('success', 'error', 'info')
 * @param {string} containerId - ID of the container element
 */
function showAlert(message, type = 'info', containerId = 'alert-container') {
    const alertContainer = document.getElementById(containerId);
    if (!alertContainer) return;
    
    // Clear previous alerts
    alertContainer.innerHTML = '';
    
    // Create alert element
    const alertElement = document.createElement('div');
    alertElement.className = `alert alert-${type}`;
    alertElement.textContent = message;
    
    // Add close button
    const closeButton = document.createElement('button');
    closeButton.innerHTML = '&times;';
    closeButton.className = 'alert-close';
    closeButton.onclick = () => alertElement.remove();
    alertElement.appendChild(closeButton);
    
    // Add to container
    alertContainer.appendChild(alertElement);
    
    // Auto-hide after 5 seconds for success messages
    if (type === 'success') {
        setTimeout(() => {
            if (alertElement.parentNode) {
                alertElement.remove();
            }
        }, 5000);
    }
}

/**
 * Format date for display
 * @param {string} dateString - Date string from API
 * @returns {string} - Formatted date string
 */
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('ar-SA', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

/**
 * Get status badge HTML
 * @param {string} status - Status value
 * @returns {string} - HTML for status badge
 */
function getStatusBadgeHtml(status) {
    let className = '';
    
    switch (status) {
        case 'جديد':
            className = 'status-new';
            break;
        case 'قيد المعالجة':
            className = 'status-processing';
            break;
        case 'تم العثور':
        case 'تم المطابقة':
            className = 'status-found';
            break;
        case 'مغلق':
            className = 'status-closed';
            break;
        default:
            className = '';
    }
    
    return `<span class="status-badge ${className}">${status}</span>`;
}

/**
 * Populate select element with options
 * @param {string} selectId - ID of the select element
 * @param {Array} options - Array of option objects with id and name_ar properties
 */
function populateSelectOptions(selectId, options) {
    const selectElement = document.getElementById(selectId);
    if (!selectElement) return;
    
    // Clear existing options except the first one
    while (selectElement.options.length > 1) {
        selectElement.remove(1);
    }
    
    // Add new options
    options.forEach(option => {
        const optionElement = document.createElement('option');
        optionElement.value = option.id;
        optionElement.textContent = option.name_ar;
        selectElement.appendChild(optionElement);
    });
}

/**
 * Populate year select with options
 * @param {string} selectId - ID of the select element
 * @param {number} startYear - Start year
 * @param {number} endYear - End year
 */
function populateYearOptions(selectId, startYear = 1980, endYear = new Date().getFullYear()) {
    const selectElement = document.getElementById(selectId);
    if (!selectElement) return;
    
    // Clear existing options except the first one
    while (selectElement.options.length > 1) {
        selectElement.remove(1);
    }
    
    // Add year options in descending order
    for (let year = endYear; year >= startYear; year--) {
        const optionElement = document.createElement('option');
        optionElement.value = year;
        optionElement.textContent = year;
        selectElement.appendChild(optionElement);
    }
}

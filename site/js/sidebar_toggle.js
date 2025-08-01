/**
 * sidebar_toggle.js - وظائف التبديل للشريط الجانبي
 * تم البرمجة بواسطة: Manus AI
 * التاريخ: 2025-06-01
 */

document.addEventListener('DOMContentLoaded', function() {
    // العناصر المطلوبة
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const menuItems = document.querySelectorAll('.menu-item[data-target]');
    
    // التبديل بين إظهار وإخفاء الشريط الجانبي
    function toggleSidebar() {
        sidebar.classList.toggle('active');
        sidebarOverlay.classList.toggle('active');
        
        // تغيير أيقونة الزر
        const toggleIcon = sidebarToggle.querySelector('i');
        if (sidebar.classList.contains('active')) {
            toggleIcon.classList.remove('fa-bars');
            toggleIcon.classList.add('fa-times');
        } else {
            toggleIcon.classList.remove('fa-times');
            toggleIcon.classList.add('fa-bars');
        }
    }
    
    // إضافة مستمع حدث للزر
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', toggleSidebar);
    }
    
    // إضافة مستمع حدث للطبقة المعتمة لإغلاق الشريط الجانبي عند النقر خارجه
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            if (sidebar.classList.contains('active')) {
                toggleSidebar();
            }
        });
    }
    
    // إغلاق الشريط الجانبي عند النقر على عنصر من القائمة في الشاشات الصغيرة
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            
            // إزالة الفئة النشطة من جميع عناصر القائمة
            menuItems.forEach(mi => mi.classList.remove('active'));
            
            // إضافة الفئة النشطة للعنصر المحدد
            this.classList.add('active');
            
            // إخفاء جميع الأقسام
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });
            
            // إظهار القسم المستهدف
            document.getElementById(targetId).classList.add('active');
            
            // إغلاق الشريط الجانبي في الشاشات الصغيرة
            if (window.innerWidth <= 992 && sidebar.classList.contains('active')) {
                toggleSidebar();
            }
        });
    });
    
    // إغلاق التنبيهات
    const closeButtons = document.querySelectorAll('.alert .close');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const alert = this.closest('.alert');
            alert.classList.remove('show');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 150);
        });
    });
});

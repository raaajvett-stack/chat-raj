
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    
    
    
    
    
    <!-- ====================================================== -->
    <!--  بداية: كود تحليلات جوجل (Google Analytics) -->
    <!--  استبدل G-XXXXXXXXXX بمعرف القياس الخاص بك  -->
    <!-- ====================================================== -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-PL2FZX87EN');
    </script>
    <!-- ====================================================== -->
    <!--  نهاية: كود تحليلات جوجل (Google Analytics)   -->
    <!-- ====================================================== -->

    
    
    
    
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي - مفقودات الحرب</title>
    <!-- تحديث روابط ملفات CSS للتصميم الجديد -->
    <link rel="stylesheet" href="css/new-style.css">
    <link rel="stylesheet" href="css/new-effects.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/homepage-responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap">
    
        <!-- روابط التواصل الاجتماعي -->
    <meta property="og:title" content="مفقودات الحرب">
    <meta property="og:description" content="هذه المنصة مخصصة لتلقي البلاغات عن السيارات المفقودة والإبلاغ عن العثور على مركبات مجهولة. يمكنك استخدام هذه المنصة للإبلاغ الفوري وسوف يتم التعامل مع البلاغات بسرية تامة. كما يمكنك الاستعلام عن حالة البلاغات المقدمة سابقاً.

">
    <meta property="og:image" content="images/logo.png">
    </head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">
                                <span class="logo-text">مفقودات الحرب</span>
            </div>
            
                        <div class="social-links">
                                
                                
                            </div>
                        
            <!-- إضافة عنصر الخلفية المتحركة -->
            <div class="gradient-animation"></div>
        </div>
    </header>

<link rel="stylesheet" href="css/profile.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
/* CSS من ملفك الأصلي يبقى هنا */
@media (max-width: 992px) {
    .dashboard-container {
        padding-top: 90px;
    }
    .main-content {
        margin-top: 0;
    }
    .sidebar-toggle {
        top: 10px;
    }
}

/* --- بداية: كود CSS الخاص ببطاقة الدعوة الجديدة --- */
.referral-share-card {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    border: 1px solid #e0e0e0;
    border-radius: 15px;
    padding: 25px 30px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    margin-top: 2rem;
}

.referral-share-card h4 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 15px;
}

.referral-share-card p {
    color: #555;
    margin-bottom: 25px;
    font-size: 1.1rem;
}

.referral-link-container {
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}

.referral-link-container input {
    text-align: left; /* Ensure LTR for the link */
    direction: ltr;
    border-radius: 5px 0 0 5px !important; /* Sharp edge on the right */
    border-right: none;
    font-size: 1rem;
    background-color: #fff;
}

.referral-link-container button {
    border-radius: 0 5px 5px 0 !important; /* Sharp edge on the left */
}

.share-buttons-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.share-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 20px;
    border-radius: 50px;
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.share-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.share-button i {
    font-size: 1.2rem;
    margin-right: 8px;
}

.share-button.whatsapp { background-color: #25D366; }
.share-button.facebook { background-color: #1877F2; }
.share-button.twitter { background-color: #1DA1F2; }

/* --- نهاية: كود CSS الخاص ببطاقة الدعوة الجديدة --- */

/* --- بداية: كود CSS الخاص بإشعار الأرباح الجديدة --- */
.new-referral-notification {
    position: fixed;
    top: 20px; /* المسافة من الأعلى */
    left: 50%;
    transform: translateX(-50%);
    z-index: 1050; /* للتأكد من ظهوره فوق العناصر الأخرى */
    padding: 15px 25px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    font-size: 1.1rem;
    display: flex; /* لترتيب الأيقونة والنص */
    align-items: center;
    gap: 10px; /* المسافة بين الأيقونة والنص */
    background-color: #28a745; /* خلفية خضراء */
    color: white; /* نص أبيض */
    text-align: center;
}

.new-referral-notification .fas {
    font-size: 1.5rem;
}

/* تصميم قسم البلاغات الرئيسي */
.reports-main-section {
    background: #fff;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.reports-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
}

.report-stat-card {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-left: 4px solid #6c757d;
}

.report-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.report-stat-card.approved {
    border-left-color: #28a745;
}

.report-stat-card.approved .stat-icon {
    color: #28a745;
}

.report-stat-card.pending {
    border-left-color: #ffc107;
}

.report-stat-card.pending .stat-icon {
    color: #ffc107;
}

.report-stat-card.rejected {
    border-left-color: #dc3545;
}

.report-stat-card.rejected .stat-icon {
    color: #dc3545;
}

.report-stat-card .stat-icon {
    font-size: 2.5rem;
    opacity: 0.8;
}

.report-stat-card .stat-number {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.report-stat-card .stat-label {
    font-size: 0.9rem;
    color: #666;
    font-weight: 500;
}

.section-subheader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #e9ecef;
}

.section-subheader h3 {
    color: #333;
    margin: 0;
    font-size: 1.3rem;
}

.reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
}

.report-card-main {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.report-card-main::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: #6c757d;
}

.report-card-main.approved::before {
    background: #28a745;
}

.report-card-main.pending::before {
    background: #ffc107;
}

.report-card-main.rejected::before {
    background: #dc3545;
}

.report-card-main:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.report-number {
    font-weight: bold;
    color: #333;
    font-size: 1.1rem;
}

.report-number i {
    margin-left: 5px;
    color: #666;
}

.status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.status-pending {
    background-color: #fff3cd;
    color: #856404;
    border: 1px solid #ffeaa7;
}

.status-approved {
    background-color: #d1edff;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

.status-rejected {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.report-content {
    space-y: 10px;
}

.report-detail {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #555;
}

.report-detail i {
    color: #666;
    width: 16px;
}

.rejection-reason {
    background-color: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 8px;
    padding: 10px;
    margin-top: 10px;
    font-size: 0.9rem;
}

.rejection-reason i {
    color: #856404;
    margin-left: 5px;
}

.rejection-reason strong {
    color: #721c24;
}

.rejection-reason span {
    color: #721c24;
    font-size: 0.9rem;
    line-height: 1.4;
}

.no-reports-message {
    text-align: center;
    padding: 40px 20px;
    color: #666;
    grid-column: 1 / -1;
}

.no-reports-message i {
    font-size: 4rem;
    color: #ccc;
    margin-bottom: 20px;
}

.no-reports-message h4 {
    color: #333;
    margin-bottom: 10px;
}

.quick-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    padding-top: 20px;
    border-top: 1px solid #e9ecef;
}

.quick-actions .btn {
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.quick-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* تحسين عرض الجدول */
.table td {
    vertical-align: middle;
}

.table .badge {
    font-size: 0.8rem;
}

/* تصميم متجاوب */
@media (max-width: 768px) {
    .reports-stats-row {
        grid-template-columns: 1fr;
    }

    .reports-grid {
        grid-template-columns: 1fr;
    }

    .section-subheader {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }

    .quick-actions {
        flex-direction: column;
    }

    .quick-actions .btn {
        width: 100%;
    }
    
    .status-badge {
        font-size: 0.75rem;
        padding: 4px 8px;
    }
    
    .rejection-reason {
        font-size: 0.8rem;
        padding: 8px;
    }
    
    .table-responsive {
        font-size: 0.85rem;
    }
}
</style>

<audio id="notificationSound" src="path/to/your/bell_sound.mp3" preload="auto"></audio>

<div class="dashboard-container">
    <button class="sidebar-toggle"><i class="fas fa-bars"></i></button>
    <div class="sidebar-overlay"></div>

    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="user-profile">
                <div class="avatar-container"><i class="fas fa-user-circle avatar-icon"></i></div>
                <h4 class="user-name">mohamed mubarak hsn</h4>
                <p class="user-username">@rebort</p>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="nav-menu">
                <li class="menu-item " data-target="profile-section">
                    <i class="fas fa-user-edit"></i> <span>البيانات الشخصية</span>
                </li>
                <li class="menu-item" data-target="password-section">
                    <i class="fas fa-key"></i> <span>تغيير كلمة المرور</span>
                </li>
                                <li class="menu-item active" data-target="reports-section">
                    <i class="fas fa-file-invoice"></i> <span>بلاغاتي</span>
                </li>
                                                <li class="menu-divider"></li>
                <li class="menu-item">
                    <a href="includes/logout.php" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                        <i class="fas fa-sign-out-alt" style="margin-left: 8px;"></i> <span>تسجيل الخروج</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
             <div class="user-stats">
                                <div class="stat-item">
                    <div class="stat-value">0</div>
                    <div class="stat-label">إجمالي البلاغات</div>
                </div>
                <div class="stat-divider"></div>
                                <div class="stat-item">
                    <div class="stat-value">2025/08/01</div>
                    <div class="stat-label">عضو منذ</div>
                </div>
            </div>
        </div>
    </aside>

    <main class="main-content">
        <div id="newReferralNotification" class="alert alert-success new-referral-notification" style="display:none;">
            <i class="fas fa-bell"></i> لقد كسبت <span id="newReferralAmount"></span> جنيه من الإحالات الجديدة!
        </div>

        <header class="content-header">
            <div class="header-title">
                <h1><i class="fas fa-user-circle"></i> الملف الشخصي</h1>
                <p>مرحباً mohamed mubarak hsn، يمكنك إدارة حسابك من هنا</p>
            </div>

                        <div class="header-actions">
                <div class="action-item"><a href="report_missing.php" class="btn btn-danger"><i class="fas fa-car-crash"></i> إبلاغ عن سيارة مفقودة</a></div>
            </div>
                    </header>

                
        
                <div class="stats-dashboard">
             <div class="stat-card missing"><i class="fas fa-car-crash"></i><div class="stat-details"><div class="stat-number">0 / 3</div><div class="stat-title">بلاغات مفقودة</div></div></div>
            <div class="stat-card total"><i class="fas fa-clipboard-list"></i><div class="stat-details"><div class="stat-number">0</div><div class="stat-title">إجمالي البلاغات</div></div></div>
        </div>
        
        <div class="content-sections">
            <section id="profile-section" class="content-section ">
                <div class="section-header"><h2><i class="fas fa-user-edit"></i> البيانات الشخصية</h2><p>يمكنك تعديل بياناتك الشخصية من هنا</p></div>
                <div class="section-body">
                    <form method="POST" class="profile-form">
                        <input type="hidden" name="csrf_token" value="c1a90e5825306af816ef3fc79e48844622d6c74b0e4940b2b01fc0bc0a758e49">
                        <div class="form-row"><div class="form-group col-md-6"><label for="username"><i class="fas fa-user-tag"></i> اسم المستخدم</label><input type="text" class="form-control" id="username" value="rebort" readonly disabled><small class="form-text text-muted">لا يمكن تغيير اسم المستخدم.</small></div><div class="form-group col-md-6"><label for="email"><i class="fas fa-at"></i> البريد الإلكتروني</label><input type="email" class="form-control" id="email" name="email" value="rebort@gmail.com" required></div></div><div class="form-group"><label for="full_name"><i class="fas fa-id-badge"></i> الاسم الكامل</label><input type="text" class="form-control" id="full_name" name="full_name" value="mohamed mubarak hsn" required></div><button type="submit" name="update_profile" class="btn btn-submit"><i class="fas fa-save"></i> حفظ التغييرات</button>
                    </form>
                </div>
            </section>

            <section id="password-section" class="content-section">
                <div class="section-header"><h2><i class="fas fa-key"></i> تغيير كلمة المرور</h2><p>يمكنك تغيير كلمة المرور الخاصة بك من هنا</p></div>
                <div class="section-body">
                    <form method="POST" class="profile-form">
                        <input type="hidden" name="csrf_token" value="c1a90e5825306af816ef3fc79e48844622d6c74b0e4940b2b01fc0bc0a758e49">
                        <div class="form-group"><label for="current_password"><i class="fas fa-lock-open"></i> كلمة المرور الحالية</label><input type="password" class="form-control" id="current_password" name="current_password" required></div><div class="form-row"><div class="form-group col-md-6"><label for="new_password"><i class="fas fa-key"></i> كلمة المرور الجديدة</label><input type="password" class="form-control" id="new_password" name="new_password" required></div><div class="form-group col-md-6"><label for="confirm_password"><i class="fas fa-check-double"></i> تأكيد كلمة المرور الجديدة</label><input type="password" class="form-control" id="confirm_password" name="confirm_password" required></div></div><button type="submit" name="change_password" class="btn btn-submit"><i class="fas fa-key"></i> تغيير كلمة المرور</button>
                    </form>
                </div>
            </section>

                        <section id="reports-section" class="content-section active">
                <div class="reports-main-section">
                    <div class="section-header">
                        <h2><i class="fas fa-file-invoice"></i> بلاغاتي</h2>
                        <p>آخر البلاغات المقدمة وحالتها</p>
                    </div>

                    <div class="reports-stats-row mb-4">
                        <div class="report-stat-card approved">
                            <div class="stat-icon"><i class="fas fa-check-circle"></i></div>
                            <div class="stat-info">
                                <div class="stat-number">0</div>
                                <div class="stat-label">تمت الموافقة</div>
                            </div>
                        </div>
                        <div class="report-stat-card pending">
                            <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            <div class="stat-info">
                                <div class="stat-number">0</div>
                                <div class="stat-label">قيد المراجعة</div>
                            </div>
                        </div>
                        <div class="report-stat-card rejected">
                            <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
                            <div class="stat-info">
                                <div class="stat-number">0</div>
                                <div class="stat-label">مرفوض</div>
                            </div>
                        </div>
                    </div>

                    <div class="recent-reports-section">
                        <div class="section-subheader">
                            <h3><i class="fas fa-history"></i> أحدث البلاغات (آخر 3)</h3>
                             <button onclick="showAllReportsDetails()" class="btn btn-outline-primary btn-sm">عرض جميع البلاغات</button>
                        </div>

                        <div class="reports-grid">
                                                            <div class="no-reports-message">
                                    <i class="fas fa-inbox"></i>
                                    <h4>لا توجد بلاغات حتى الآن</h4>
                                    <p>يمكنك تقديم بلاغ عن سيارة مفقودة من خلال الزر أدناه</p>
                                    <a href="report_missing.php" class="btn btn-danger">
                                        <i class="fas fa-car-crash"></i> إبلاغ عن سيارة مفقودة
                                    </a>
                                </div>
                                                    </div>

                        <div class="quick-actions mt-4">
                            <a href="report_missing.php" class="btn btn-danger">
                                <i class="fas fa-plus"></i> بلاغ جديد
                            </a>
                            <button onclick="showAllReportsDetails()" class="btn btn-primary">
                                <i class="fas fa-list"></i> عرض جميع البلاغات
                            </button>
                            <a href="quick_search" class="btn btn-success">
                                <i class="fas fa-search"></i> البحث عن سيارة
                            </a>
                        </div>
                    </div>
                </div>

                <div id="all-reports-details" class="reports-list-section mt-4" style="display:none;">
                    <h3><i class="fas fa-car-crash"></i> جميع بلاغات السيارات المفقودة</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>رقم البلاغ</th>
                                    <th>رقم الشاصي</th>
                                    <th>رقم اللوحة</th>
                                    <th>تاريخ البلاغ</th>
                                    <th>الحالة</th>
                                    <th>سبب الرفض</th>
                                    <th>الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr><td colspan="7" class="text-center">لا توجد بلاغات مفقودة لعرضها.</td></tr>
                                                            </tbody>
                        </table>
                    </div>
                    <button onclick="hideAllReportsDetails()" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> العودة</button>
                </div>

                <div class="reports-increase-request-section card mt-4 p-4">
                    <h4><i class="fas fa-plus-circle"></i> طلب زيادة عدد البلاغات المسموح بها</h4>
                    <p class="mb-3">
                        حالياً، يمكنك تقديم **3** بلاغاً.
                        إذا كنت بحاجة إلى تقديم المزيد من البلاغات، يمكنك إرسال طلب إلى الإدارة.
                    </p>
                                            <form method="POST" class="d-inline-block">
                            <input type="hidden" name="csrf_token" value="c1a90e5825306af816ef3fc79e48844622d6c74b0e4940b2b01fc0bc0a758e49">
                            <button type="submit" name="request_reports_increase" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> إرسال طلب زيادة الحد
                            </button>
                        </form>
                                    </div>
            </section>
            
                    </div>
    </main>
</div>

<script>
function toggleWithdrawalForm() { var form = document.getElementById('withdrawal-form-card'); if (form) { form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none'; } }
function validateWithdrawal() { const amountInput = document.getElementById('amount'); const note = document.getElementById('withdrawal-note'); const submitBtn = document.getElementById('submit-withdrawal-btn'); const minLimit = parseFloat(amountInput.min); const currentAmount = parseFloat(amountInput.value); if (currentAmount < minLimit) {
    // هذه الملاحظة (note) لم تكن موجودة في HTML الأصلي لنموذج السحب.
    // إذا أردت عرض رسالة ديناميكية للمستخدم، ستحتاج إلى إضافة عنصر HTML
    // مثل <div id="withdrawal-note" class="text-danger"></div>
    // تحت حقل المبلغ في نموذج السحب.
    submitBtn.disabled = true;
    return false;
} else {
    submitBtn.disabled = false;
    return true;
} }
function copyReferralLink() { var copyText = document.getElementById("referralLink"); if(!copyText) return; copyText.select(); copyText.setSelectionRange(0, 99999); try { document.execCommand('copy'); alert('تم نسخ الرابط بنجاح!'); } catch (err) { alert('عذراً، المتصفح لا يدعم هذه الميزة.'); } }

// دالة لعرض جميع البلاغات
function showAllReportsDetails() {
    document.querySelector('.recent-reports-section').style.display = 'none'; // إخفاء قسم أحدث البلاغات
    document.getElementById('all-reports-details').style.display = 'block'; // إظهار جدول جميع البلاغات
}

// دالة لإخفاء جميع البلاغات والعودة إلى عرض أحدث 3
function hideAllReportsDetails() {
    document.getElementById('all-reports-details').style.display = 'none'; // إخفاء جدول جميع البلاغات
    document.querySelector('.recent-reports-section').style.display = 'block'; // إظهار قسم أحدث البلاغات
}


document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const sidebar = document.querySelector('.sidebar');

    if (sidebarToggle && sidebar && sidebarOverlay) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            sidebarOverlay.classList.toggle('open');
        });
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('open');
        });
    }

    const menuItems = document.querySelectorAll('.sidebar .menu-item');
    const contentSections = document.querySelectorAll('.main-content .content-section');

    menuItems.forEach(item => {
        // التأكد من أن العنصر ليس مجرد رابط مباشر (مثل شعار أو غيره)
        if (item.querySelector('a') && item.querySelector('a').getAttribute('href') !== '#') {
             // إذا كان رابطًا حقيقيًا، دعه يتصرف بشكل طبيعي
            return;
        }

        item.addEventListener('click', function(e) {
            e.preventDefault(); // منع السلوك الافتراضي للرابط إذا كان موجودًا
            const target = this.getAttribute('data-target');

            // إزالة الفئة 'active' من جميع عناصر القائمة
            menuItems.forEach(menuItem => menuItem.classList.remove('active'));

            // إضافة الفئة 'active' إلى العنصر الذي تم النقر عليه
            this.classList.add('active');

            // إخفاء جميع أقسام المحتوى
            contentSections.forEach(section => {
                section.style.display = 'none';
                section.classList.remove('active');
            });

            // إظهار القسم المستهدف
            const targetSection = document.getElementById(target);
            if (targetSection) {
                targetSection.style.display = 'block';
                targetSection.classList.add('active');
            }

            // إغلاق الشريط الجانبي في الأجهزة المحمولة
            if (window.innerWidth <= 992) {
                sidebar.classList.remove('open');
                sidebarOverlay.classList.remove('open');
            }
        });
    });

    // التحكم في القسم النشط عند تحميل الصفحة
    const isReferralEnabled = 0;
    if (isReferralEnabled === 0) {
        // إذا كان المستخدم لا يستخدم نظام الإحالة، اجعل قسم البلاغات هو النشط
        document.getElementById('reports-section').style.display = 'block';
        document.getElementById('reports-section').classList.add('active');
        document.querySelector('.sidebar .menu-item[data-target="reports-section"]').classList.add('active');
        // تأكد من إلغاء تنشيط قسم "البيانات الشخصية"
        document.getElementById('profile-section').style.display = 'none';
        document.getElementById('profile-section').classList.remove('active');
        document.querySelector('.sidebar .menu-item[data-target="profile-section"]').classList.remove('active');

    } else {
        // إذا كان المستخدم يستخدم نظام الإحالة، اجعل قسم الملف الشخصي هو النشط
        document.getElementById('profile-section').style.display = 'block';
        document.getElementById('profile-section').classList.add('active');
        document.querySelector('.sidebar .menu-item[data-target="profile-section"]').classList.add('active');
        // تأكد من إلغاء تنشيط قسم "بلاغاتي" إذا كان موجودًا
        const reportsSection = document.getElementById('reports-section');
        if (reportsSection) {
            reportsSection.style.display = 'none';
            reportsSection.classList.remove('active');
            const reportsMenuItem = document.querySelector('.sidebar .menu-item[data-target="reports-section"]');
            if (reportsMenuItem) {
                reportsMenuItem.classList.remove('active');
            }
        }
    }


    
    // --- كود JavaScript لإشعار الأرباح الجديدة ---
    // هذه القيمة تأتي من PHP، وهي المبلغ الذي تم ربحه منذ آخر تسجيل دخول
    const newReferralEarnings = 0;

    // ذا كان هناك أي أرباح جديدة (أكبر من صفر)
    if (newReferralEarnings > 0) {
        const notificationDiv = document.getElementById('newReferralNotification');
        const notificationAmountSpan = document.getElementById('newReferralAmount');
        const notificationSound = document.getElementById('notificationSound'); // عنصر الصوت

        if (notificationDiv && notificationAmountSpan) {
            // تنسيق المبلغ ليعرض رقمين بعد الفاصلة ويستخدم الفواصل المناسبة للعملات
            // 'ar-EG' يستخدم لتنسيق عربي مصري (جنيه)، يمكنك تغييرها حسب الحاجة
            notificationAmountSpan.textContent = newReferralEarnings.toLocaleString('ar-EG', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            notificationDiv.style.display = 'flex'; // إظهار الإشعار

            // تشغيل الصوت
            if (notificationSound) {
                // استخدام .play() مع .catch() لتجنب الأخطاء إذا لم يتمكن المتصفح من تشغيل الصوت
                notificationSound.play().catch(e => console.error("Error playing sound:", e));
            }

            // إخفاء الإشعار بعد 4 ثوانٍ (4000 ملي ثانية)
            setTimeout(() => {
                notificationDiv.style.display = 'none';
            }, 10000);
        }
    }
    // --- نهاية كود JavaScript لإشعار الأرباح الجديدة ---
});
</script>
<script src="js/sidebar_toggle.js"></script>



<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul class="footer-links">
                    <li><a href="index">الرئيسية</a></li>
                    <li><a href="quick_search">البحث عن سيارة</a></li>
                    <li><a href="report_missing">الإبلاغ عن سيارة مفقودة</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>حسابي</h3>
                <ul class="footer-links">
                    <li><a href="login">تسجيل الدخول</a></li>
                    <li><a href="register">إنشاء حساب جديد</a></li>
                    <li><a href="profile">الملف الشخصي</a></li>
                    <li><a href="forgot_password">استعادة كلمة المرور</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>تواصل معنا</h3>
                <ul class="footer-links">
                    <li><a href="mailto:shaheid.net@gmail.com"><i class="fas fa-envelope"></i> البريد الإلكتروني</a></li>
                    <li><a href="tel:0918014555"><i class="fas fa-phone"></i> الهاتف</a></li>
                    <li><a href=""><i class="fab fa-facebook-f"></i> فيسبوك</a></li>
                    <li><a href="https://www.tiktok.com/@modi3033"><i class="fab fa-tiktok"></i> تيك توك</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 مفقودات الحرب. جميع الحقوق محفوظة.</p>
        </div>
    </div>
</footer>

<!-- تحديث روابط ملفات JavaScript للتصميم الجديد -->
<script src="js/config.js"></script>
<script src="js/api.js"></script>
<script src="js/new-main.js"></script>

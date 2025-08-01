// تحسينات JavaScript للتصميم الجديد

document.addEventListener('DOMContentLoaded', function() {
    // تأثير التمرير للهيدر
    const header = document.querySelector('.header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
    
    // تأثيرات ظهور العناصر عند التمرير
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    if (animateElements.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    }
    
    // تحسين تفاعلات النماذج
    const formInputs = document.querySelectorAll('.form-control');
    
    if (formInputs.length > 0) {
        formInputs.forEach(input => {
            // إضافة تأثير عند التركيز
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            // إزالة التأثير عند فقدان التركيز
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
                
                // إضافة صنف إذا كان الحقل يحتوي على قيمة
                if (this.value.trim() !== '') {
                    this.parentElement.classList.add('has-value');
                } else {
                    this.parentElement.classList.remove('has-value');
                }
            });
            
            // التحقق من الحالة الأولية
            if (input.value.trim() !== '') {
                input.parentElement.classList.add('has-value');
            }
        });
    }
    
    // تأثيرات للبطاقات
    const serviceCards = document.querySelectorAll('.service-card');
    
    if (serviceCards.length > 0) {
        serviceCards.forEach(card => {
            // تأثير تتبع الماوس للبطاقات
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                // حساب الزاوية بناءً على موقع الماوس
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const angleX = (y - centerY) / 20;
                const angleY = (centerX - x) / 20;
                
                // تطبيق التأثير
                this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-15px)`;
            });
            
            // إعادة البطاقة لوضعها الطبيعي عند مغادرة الماوس
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-15px)';
                setTimeout(() => {
                    this.style.transform = 'translateY(0)';
                }, 300);
            });
        });
    }
    
    // تأثير نبض للأزرار
    const buttons = document.querySelectorAll('.btn');
    
    if (buttons.length > 0) {
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.classList.add('pulse-effect');
            });
            
            button.addEventListener('animationend', function() {
                this.classList.remove('pulse-effect');
            });
        });
    }
    
    // تأثير تمويج للقسم الرئيسي
    const heroSection = document.querySelector('.hero');
    
    if (heroSection) {
        // إضافة تأثير تمويج متحرك
        const wave = document.createElement('div');
        wave.classList.add('wave-effect');
        heroSection.appendChild(wave);
    }
    
    // تحسين تجربة التنقل
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    if (navLinks.length > 0) {
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                
                if (targetId !== '#') {
                    e.preventDefault();
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }
});

// إضافة تأثيرات CSS متقدمة
document.addEventListener('DOMContentLoaded', function() {
    // إضافة تأثير الخلفية المتحركة للهيدر
    const header = document.querySelector('.header');
    
    if (header) {
        const gradientAnimation = document.createElement('div');
        gradientAnimation.classList.add('gradient-animation');
        header.appendChild(gradientAnimation);
    }
    
    // إضافة تأثير توهج للأزرار الرئيسية
    const primaryButtons = document.querySelectorAll('.btn-primary');
    
    if (primaryButtons.length > 0) {
        primaryButtons.forEach(button => {
            const glowEffect = document.createElement('div');
            glowEffect.classList.add('glow-effect');
            button.appendChild(glowEffect);
        });
    }
});

// تحسين تجربة المستخدم للنماذج
function validateForm(formId) {
    const form = document.getElementById(formId);
    
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input, select, textarea');
    let isValid = true;
    
    inputs.forEach(input => {
        if (input.hasAttribute('required') && input.value.trim() === '') {
            input.classList.add('is-invalid');
            isValid = false;
            
            // إضافة رسالة خطأ
            const errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message');
            errorMessage.textContent = 'هذا الحقل مطلوب';
            
            // التحقق من وجود رسالة خطأ سابقة
            const existingError = input.parentElement.querySelector('.error-message');
            
            if (!existingError) {
                input.parentElement.appendChild(errorMessage);
            }
        } else {
            input.classList.remove('is-invalid');
            
            // إزالة رسالة الخطأ إن وجدت
            const existingError = input.parentElement.querySelector('.error-message');
            
            if (existingError) {
                existingError.remove();
            }
        }
    });
    
    return isValid;
}

// تأثيرات إضافية للصفحة
window.addEventListener('load', function() {
    // تأثير تحميل الصفحة
    document.body.classList.add('page-loaded');
    
    // تحريك العناصر للأعلى بشكل متتابع
    const staggerElements = document.querySelectorAll('.stagger-item');
    
    if (staggerElements.length > 0) {
        staggerElements.forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('show');
            }, 100 * index);
        });
    }
});

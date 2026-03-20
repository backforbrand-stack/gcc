const slides = [
    {
        title: "باب الخلیج",
        body: `
            <div class="fade-in" style="text-align: center;">
                <div style="background: #dc2626; width: 80px; height: 80px; margin: 0 auto 1.5rem; border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 22V8m0 0 4 4m-4-4-4 4m4-4v14M5 12H2m20 0h-3"/></svg>
                </div>
                <h1 style="font-size: 30px; font-weight: 900; color: #0f172a;">BAB AL-KHALEEJ</h1>
                <p style="font-size: 10px; color: #dc2626; font-weight: bold; margin-bottom: 1.5rem;">GCC مارکیٹ انٹری کا AI آپریٹنگ سسٹم</p>
                <div class="card-dark">
                    <div style="font-size: 30px; font-weight: 900;">25,000 <span style="font-size: 18px; color: #ef4444;">BHD</span></div>
                    <p style="font-size: 9px; color: #f87171; opacity: 0.8; font-weight: 900; letter-spacing: 1px;">موجودہ: پری سیڈ اینجل راؤنڈ</p>
                </div>
            </div>`
    },
    {
        title: "1. مسئلہ: بیوروکریٹک رکاوٹ",
        body: `
            <div class="fade-in">
                <div style="background: #fef2f2; padding: 1rem; border-radius: 1rem; border: 1px solid #fee2e2; margin-bottom: 1rem;">
                    <p style="font-size: 12px; font-weight: bold; line-height: 1.6;">
                        بحرین اور جی سی سی میں مارکیٹ انٹری کے دوران <span class="text-red">40% سرمایہ</span> اور 6 ماہ کا وقت صرف دستی کاغذی کارروائی میں ضائع ہو جاتا ہے۔
                    </p>
                </div>
                <p style="font-size: 10px; color: #94a3b8; font-weight: 900; margin-bottom: 0.5rem;">بڑی رکاوٹیں:</p>
                <div style="font-size: 11px; font-weight: bold; color: #475569;">• CR اور ویزا کی پیچیدگی</div>
                <div style="font-size: 11px; font-weight: bold; color: #475569;">• مقامی لیبر قوانین کی لاعلمی</div>
            </div>`
    },
    // Add other slides here following the same pattern...
    {
        title: "12. فائنل آفر",
        body: `
            <div class="fade-in" style="text-align: center;">
                <div style="background: #f8fafc; padding: 1.5rem; border-radius: 1rem; margin-bottom: 1rem;">
                    <span style="font-size: 9px; color: #dc2626; font-weight: 900;">مختص کردہ اینجل سرمایہ</span>
                    <h3 style="font-size: 24px; font-weight: 900; font-style: italic;">25,000 BHD</h3>
                </div>
                <button class="btn-primary" style="width: 100%; height: 56px; font-size: 14px;">آج ہی رابطہ کریں</button>
                <p style="font-size: 8px; color: #cbd5e1; margin-top: 1rem; font-style: italic;">CONFIDENTIAL • BAB AL-KHALEEJ AI 2026</p>
            </div>`
    }
];

let currentStep = 0;

const slideTitle = document.getElementById('slide-title');
const slideBody = document.getElementById('slide-body');
const slideCounter = document.getElementById('slide-counter');
const nextBtnText = document.getElementById('next-btn-text');

function updateSlide() {
    const slide = slides[currentStep];
    slideTitle.innerText = slide.title;
    slideBody.innerHTML = slide.body;
    slideCounter.innerText = `${currentStep + 1} / ${slides.length}`;
    
    nextBtnText.innerText = currentStep === slides.length - 1 ? "REVIEW DECK" : "CONTINUE";
}

document.getElementById('next-btn').addEventListener('click', () => {
    if (currentStep < slides.length - 1) {
        currentStep++;
    } else {
        currentStep = 0;
    }
    updateSlide();
});

document.getElementById('prev-btn').addEventListener('click', () => {
    if (currentStep > 0) {
        currentStep--;
        updateSlide();
    }
});

// Init
updateSlide();

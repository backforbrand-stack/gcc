import React, { useState } from 'react';
import { 
  ArrowRight, ArrowLeft, Anchor, Rocket, Briefcase, 
  Zap, ShieldCheck, Users, Network, Building2, Globe, AlertCircle, CheckCircle2, Scale, Plane, TrendingUp, Layers, Timer, Coins, PieChart
} from 'lucide-react';

const App = () => {
  const [step, setStep] = useState(0);

  const slides = [
    {
      id: "cover",
      title: "باب الخلیج",
      body: (
        <div className="text-center space-y-6 py-2">
          <div className="flex justify-center">
            <div className="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center shadow-xl border-2 border-white">
              <Anchor size={40} className="text-white" />
            </div>
          </div>
          <div className="space-y-1">
            <h1 className="text-3xl font-black text-slate-900 uppercase">Bab Al-Khaleej</h1>
            <p className="text-[10px] font-bold text-red-600 uppercase tracking-widest text-center">GCC مارکیٹ انٹری کا AI آپریٹنگ سسٹم</p>
          </div>
          <div className="bg-slate-900 text-white p-6 rounded-[2rem] shadow-lg border-b-4 border-red-600">
             <div className="text-3xl font-black">25,000 <span className="text-red-500 text-lg font-light">BHD</span></div>
             <p className="text-[9px] opacity-60 mt-1 uppercase font-black tracking-widest text-red-400">موجودہ: پری سیڈ اینجل راؤنڈ</p>
          </div>
        </div>
      )
    },
    {
      id: "problem_deep",
      title: "1. مسئلہ: بیوروکریٹک رکاوٹ",
      body: (
        <div className="space-y-3">
          <div className="bg-red-50 p-4 rounded-2xl border border-red-100">
            <h4 className="text-red-700 font-black text-[10px] mb-2 uppercase flex flex-row-reverse items-center gap-2">
              <AlertCircle size={14}/> بیوروکریسی کا ضیاع
            </h4>
            <p className="text-xs font-bold text-slate-800 leading-relaxed text-right">
              بحرین اور جی سی سی میں مارکیٹ انٹری کے دوران <span className="text-red-600">40% سرمایہ</span> اور 6 ماہ کا وقت صرف دستی کاغذی کارروائی (Manual Processing) میں ضائع ہو جاتا ہے۔
            </p>
          </div>
          <div className="p-3 bg-white rounded-xl border border-slate-100 text-right space-y-2">
             <p className="text-[10px] font-black text-slate-400 uppercase">بڑی رکاوٹیں:</p>
             <div className="text-[11px] font-bold text-slate-600">• CR اور ویزا کی پیچیدگی</div>
             <div className="text-[11px] font-bold text-slate-600">• مقامی لیبر قوانین کی لاعلمی</div>
          </div>
        </div>
      )
    },
    {
      id: "solution_deep",
      title: "2. سلوشن: AI آپریٹنگ سسٹم",
      body: (
        <div className="space-y-3 text-right">
          {[
            { t: "AI لیگل انجن", d: "مقامی قوانین اور ریگولیشنز کی 100% درست خودکار رہنمائی۔", i: <Scale size={18}/> },
            { t: "ون کلک گیٹ وے", d: "منسٹری APIs کے ذریعے CR اور ویزا کی تیز ترین پروسیسنگ۔", i: <Zap size={18}/> },
            { t: "میچ میکنگ پورٹل", d: "سرمایہ کاروں اور پراجیکٹس کا براہ راست ڈیجیٹل لنک۔", i: <Network size={18}/> }
          ].map((item, i) => (
            <div key={i} className="flex flex-row-reverse items-start gap-3 bg-white p-3 rounded-2xl border border-slate-50 shadow-sm">
              <div className="bg-red-50 p-2 rounded-lg text-red-600">{item.i}</div>
              <div className="flex-1">
                <span className="text-xs font-black block text-slate-800">{item.t}</span>
                <span className="text-[10px] text-slate-400 font-bold">{item.d}</span>
              </div>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "market_tourism",
      title: "3. جی سی سی ٹورازم ($137B+)",
      body: (
        <div className="space-y-3">
          <div className="bg-slate-900 p-3 rounded-2xl text-white">
            <h4 className="text-[9px] font-black text-red-500 uppercase mb-1">Total GDP Contribution</h4>
            <div className="text-2xl font-black">$137.4 Billion+</div>
          </div>
          <div className="space-y-1.5">
             {[
               { n: "KSA", v: "$55.4B", p: "w-[100%]", c: "bg-green-500" },
               { n: "UAE", v: "$44.8B", p: "w-[80%]", c: "bg-blue-500" },
               { n: "Qatar", v: "$19.0B", p: "w-[35%]", c: "bg-purple-500" },
               { n: "Bahrain", v: "$6.2B", p: "w-[15%]", c: "bg-red-600" }
             ].map((item, i) => (
               <div key={i} className="bg-white p-2 rounded-xl border border-slate-50">
                  <div className="flex justify-between text-[10px] font-bold mb-1">
                    <span className="text-slate-500">{item.n}</span>
                    <span className="text-slate-900">{item.v}</span>
                  </div>
                  <div className="w-full bg-slate-100 h-1 rounded-full"><div className={`${item.c} h-full ${item.p}`}></div></div>
               </div>
             ))}
          </div>
        </div>
      )
    },
    {
      id: "consultancy",
      title: "4. کنسلٹنسی مارکیٹ ($15B+)",
      body: (
        <div className="space-y-2 text-right">
          <div className="p-3 bg-red-50 rounded-xl border border-red-100">
            <h4 className="text-[10px] font-black text-red-700 uppercase">سعودی عرب (لیڈر): $6.0B</h4>
            <p className="text-[9px] text-slate-500 font-bold">وژن 2030 کے میگا پراجیکٹس کی طلب۔</p>
          </div>
          <div className="p-3 bg-slate-50 rounded-xl border border-slate-100">
            <h4 className="text-[10px] font-black text-slate-500 uppercase">یو اے ای: $4.0B</h4>
            <p className="text-[9px] text-slate-500 font-bold">ملٹی نیشنل بزنس حب۔</p>
          </div>
          <div className="p-3 bg-white rounded-xl border border-slate-100">
            <h4 className="text-[10px] font-black text-slate-400 uppercase">بحرین و دیگر: $5.0B+</h4>
            <p className="text-[9px] text-slate-500 font-bold">بحرین فن ٹیک اور اسٹارٹ اپس کا حب۔</p>
          </div>
        </div>
      )
    },
    {
      id: "income",
      title: "5. آمدنی کے 5 ذرائع",
      body: (
        <div className="space-y-2 text-right">
          {[
            { n: "میچ میکنگ کمیشن", p: "3% - 5%", h: true },
            { n: "فل میجڈ سیٹ اپ", p: "1200 BHD" },
            { n: "SaaS سبسکرپشن", p: "450 BHD" },
            { n: "گورنمنٹ API لائسنسنگ", p: "Custom" },
            { n: "B2B لیڈ جنریشن", p: "Variable" }
          ].map((item, i) => (
            <div key={i} className={`flex flex-row-reverse justify-between items-center p-2.5 rounded-xl border ${item.h ? 'bg-slate-900 text-white border-slate-900' : 'bg-white border-slate-50'}`}>
              <span className="text-[10px] font-black">{item.n}</span>
              <span className={`text-[10px] font-bold ${item.h ? 'text-red-400' : 'text-slate-500'}`}>{item.p}</span>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "roadmap",
      title: "6. فنڈنگ کے مختلف فیزز",
      body: (
        <div className="space-y-2">
          {[
            { l: "Angel Round (Now)", v: "25,000 BHD", a: true },
            { l: "Seed Round", v: "100K - 250K BHD" },
            { l: "Round 1 (Series A)", v: "$1.0M - $2.5M" },
            { l: "Round 2 (Series B)", v: "$3.5M - $6.0M" }
          ].map((item, i) => (
            <div key={i} className={`p-3 rounded-xl flex justify-between items-center border ${item.a ? 'bg-red-600 text-white border-red-600' : 'bg-white border-slate-50'}`}>
              <span className="text-[10px] font-black uppercase">{item.l}</span>
              <span className="text-xs font-black">{item.v}</span>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "utilization",
      title: "7. فنڈز کا استعمال (25K)",
      body: (
        <div className="space-y-4 pt-2 text-right">
          <div className="space-y-4">
             {[
               { l: "AI انجن اور انجینئرنگ", p: 60 },
               { l: "مارکیٹنگ اور SEO", p: 25 },
               { l: "قانونی و آپریشنز", p: 15 }
             ].map((item, i) => (
               <div key={i} className="space-y-1">
                  <div className="flex flex-row-reverse justify-between text-[10px] font-black uppercase text-slate-500">
                    <span>{item.l}</span>
                    <span>{item.p}%</span>
                  </div>
                  <div className="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                    <div className="bg-red-600 h-full" style={{ width: `${item.p}%` }}></div>
                  </div>
               </div>
             ))}
          </div>
        </div>
      )
    },
    {
      id: "equity_offer",
      title: "8. ایکویٹی آفر اور ڈیل",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-slate-900 p-5 rounded-[2rem] text-white">
             <div className="flex flex-row-reverse items-center gap-3 mb-2">
                <PieChart size={20} className="text-red-500"/>
                <span className="text-xs font-black uppercase">Angel Allocation</span>
             </div>
             <p className="text-xs font-bold leading-relaxed">
                ہم 25,000 BHD کے بدلے ایکویٹی (Equity) آفر کر رہے ہیں جس کی تفصیلات ٹرم شیٹ (Term Sheet) میں باہمی مشاورت سے طے کی جائیں گی۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "return_timeline",
      title: "9. واپسی کا وقت (Timeline)",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-white p-5 rounded-[2rem] border border-slate-100 shadow-sm">
             <div className="flex flex-row-reverse items-center gap-3 mb-3">
                <Timer size={20} className="text-red-600"/>
                <span className="text-xs font-black text-slate-900">Exit Strategy</span>
             </div>
             <p className="text-[11px] font-bold text-slate-600 leading-relaxed">
                سرمایہ کاری کی واپسی (ROI) کا متوقع وقت <span className="text-red-600">3 سال</span> ہے۔ ایگزٹ بذریعہ ایکوزیشن (Acquisition) یا سیریز اے (Series A) راؤنڈ میں کیش آؤٹ آپشن ہوگا۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "protection",
      title: "10. انویسٹر کا تحفظ",
      body: (
        <div className="space-y-3 text-right">
          <div className="p-4 bg-red-50 rounded-[2rem] border border-red-100">
             <h3 className="text-xs font-black text-slate-900 mb-3 flex flex-row-reverse items-center gap-2">
                <ShieldCheck className="text-green-600" size={18}/> اینجل تحفظ
             </h3>
             <ul className="space-y-2">
                <li className="text-[10px] font-bold text-slate-600 flex flex-row-reverse items-start gap-2">
                   <CheckCircle2 size={12} className="text-red-600 mt-0.5 shrink-0"/>
                   <span>اینٹی ڈائلوشن حقوق (Anti-Dilution)۔</span>
                </li>
                <li className="text-[10px] font-bold text-slate-600 flex flex-row-reverse items-start gap-2">
                   <CheckCircle2 size={12} className="text-red-600 mt-0.5 shrink-0"/>
                   <span>اگلے راؤنڈز میں سرمایہ کاری کا پہلا حق (Pro-rata)۔</span>
                </li>
             </ul>
          </div>
        </div>
      )
    },
    {
      id: "vision",
      title: "11. جی سی سی گیٹ وے لیورج",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-slate-900 p-6 rounded-[2.5rem] text-white shadow-xl relative overflow-hidden">
             <Globe className="absolute -top-4 -left-4 text-white/5" size={100}/>
             <h3 className="text-lg font-black mb-2 uppercase italic text-red-500">GCC Bridge</h3>
             <p className="text-[11px] font-bold leading-relaxed opacity-90">
                بحرین کو ٹیسٹ بیڈ کے طور پر استعمال کر کے ہم پورے جی سی سی کی $137B کی مارکیٹ کے لیے واحد ڈیجیٹل گیٹ وے بنیں گے۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "final",
      title: "12. فائنل آفر",
      body: (
        <div className="text-center space-y-4 pt-2">
          <div className="bg-slate-50 p-6 rounded-2xl border border-slate-100">
             <span className="text-[9px] font-black text-red-600 uppercase">مختص کردہ اینجل سرمایہ</span>
             <h3 className="text-2xl font-black text-slate-900 italic">25,000 BHD</h3>
          </div>
          <button className="w-full bg-red-600 text-white py-4 rounded-xl text-sm font-black shadow-lg active:scale-95 transition-all">
             آج ہی رابطہ کریں
          </button>
          <div className="text-[8px] font-black text-slate-300 uppercase tracking-widest pt-2 italic">
            CONFIDENTIAL • BAB AL-KHALEEJ AI 2026
          </div>
        </div>
      )
    }
  ];

  return (
    <div className="min-h-screen bg-slate-100 flex items-center justify-center p-2 font-sans overflow-hidden" dir="ltr">
      <div className="w-full max-w-[360px] bg-white rounded-[2.5rem] shadow-2xl h-[640px] flex flex-col border-[8px] border-slate-950 relative overflow-hidden">
        <div className="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-5 bg-slate-950 rounded-b-xl z-30"></div>
        
        <div className="flex-1 px-6 py-10 overflow-y-auto no-scrollbar">
          <div className="mb-6 flex flex-row-reverse justify-between items-center">
            <div className="bg-red-50 px-2 py-0.5 rounded-lg border border-red-100">
               <span className="text-[8px] font-black text-red-600 uppercase">DECK S26 MASTER</span>
            </div>
            <div className="text-[9px] font-black text-slate-300">{step + 1} / {slides.length}</div>
          </div>
          
          <h2 className="text-xl font-black text-slate-900 mb-4 leading-tight text-right">
            {slides[step].title}
          </h2>

          <div key={step} className="animate-in fade-in slide-in-from-bottom-4 duration-300">
            {slides[step].body}
          </div>
        </div>

        <div className="px-6 pb-8 pt-2 bg-white/95 backdrop-blur-md flex gap-2 border-t border-slate-50">
          <button 
            onClick={() => setStep(s => s > 0 ? s - 1 : 0)}
            className="w-12 h-12 bg-slate-50 rounded-xl flex items-center justify-center text-slate-400 border border-slate-100 active:scale-90"
          >
            <ArrowLeft size={20} />
          </button>
          <button 
            onClick={() => step < slides.length - 1 ? setStep(s => s + 1) : setStep(0)}
            className="flex-1 h-12 bg-red-600 text-white rounded-xl font-black shadow-md flex items-center justify-center gap-2 active:scale-95 transition-all"
          >
            <span className="text-[10px] uppercase tracking-widest">
              {step === slides.length - 1 ? "Review Deck" : "Continue"}
            </span>
            <ArrowRight size={16} />
          </button>
        </div>
      </div>
    </div>
  );
};

export default App;
import React, { useState } from 'react';
import { 
  ArrowRight, ArrowLeft, Anchor, Rocket, Briefcase, 
  Zap, ShieldCheck, Users, Network, Building2, Globe, AlertCircle, CheckCircle2, Scale, Plane, TrendingUp, Layers, Timer, Coins, PieChart
} from 'lucide-react';

const App = () => {
  const [step, setStep] = useState(0);

  const slides = [
    {
      id: "cover",
      title: "باب الخلیج",
      body: (
        <div className="text-center space-y-6 py-2">
          <div className="flex justify-center">
            <div className="w-20 h-20 bg-red-600 rounded-2xl flex items-center justify-center shadow-xl border-2 border-white">
              <Anchor size={40} className="text-white" />
            </div>
          </div>
          <div className="space-y-1">
            <h1 className="text-3xl font-black text-slate-900 uppercase">Bab Al-Khaleej</h1>
            <p className="text-[10px] font-bold text-red-600 uppercase tracking-widest text-center">GCC مارکیٹ انٹری کا AI آپریٹنگ سسٹم</p>
          </div>
          <div className="bg-slate-900 text-white p-6 rounded-[2rem] shadow-lg border-b-4 border-red-600">
             <div className="text-3xl font-black">25,000 <span className="text-red-500 text-lg font-light">BHD</span></div>
             <p className="text-[9px] opacity-60 mt-1 uppercase font-black tracking-widest text-red-400">موجودہ: پری سیڈ اینجل راؤنڈ</p>
          </div>
        </div>
      )
    },
    {
      id: "problem_deep",
      title: "1. مسئلہ: بیوروکریٹک رکاوٹ",
      body: (
        <div className="space-y-3">
          <div className="bg-red-50 p-4 rounded-2xl border border-red-100">
            <h4 className="text-red-700 font-black text-[10px] mb-2 uppercase flex flex-row-reverse items-center gap-2">
              <AlertCircle size={14}/> بیوروکریسی کا ضیاع
            </h4>
            <p className="text-xs font-bold text-slate-800 leading-relaxed text-right">
              بحرین اور جی سی سی میں مارکیٹ انٹری کے دوران <span className="text-red-600">40% سرمایہ</span> اور 6 ماہ کا وقت صرف دستی کاغذی کارروائی (Manual Processing) میں ضائع ہو جاتا ہے۔
            </p>
          </div>
          <div className="p-3 bg-white rounded-xl border border-slate-100 text-right space-y-2">
             <p className="text-[10px] font-black text-slate-400 uppercase">بڑی رکاوٹیں:</p>
             <div className="text-[11px] font-bold text-slate-600">• CR اور ویزا کی پیچیدگی</div>
             <div className="text-[11px] font-bold text-slate-600">• مقامی لیبر قوانین کی لاعلمی</div>
          </div>
        </div>
      )
    },
    {
      id: "solution_deep",
      title: "2. سلوشن: AI آپریٹنگ سسٹم",
      body: (
        <div className="space-y-3 text-right">
          {[
            { t: "AI لیگل انجن", d: "مقامی قوانین اور ریگولیشنز کی 100% درست خودکار رہنمائی۔", i: <Scale size={18}/> },
            { t: "ون کلک گیٹ وے", d: "منسٹری APIs کے ذریعے CR اور ویزا کی تیز ترین پروسیسنگ۔", i: <Zap size={18}/> },
            { t: "میچ میکنگ پورٹل", d: "سرمایہ کاروں اور پراجیکٹس کا براہ راست ڈیجیٹل لنک۔", i: <Network size={18}/> }
          ].map((item, i) => (
            <div key={i} className="flex flex-row-reverse items-start gap-3 bg-white p-3 rounded-2xl border border-slate-50 shadow-sm">
              <div className="bg-red-50 p-2 rounded-lg text-red-600">{item.i}</div>
              <div className="flex-1">
                <span className="text-xs font-black block text-slate-800">{item.t}</span>
                <span className="text-[10px] text-slate-400 font-bold">{item.d}</span>
              </div>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "market_tourism",
      title: "3. جی سی سی ٹورازم ($137B+)",
      body: (
        <div className="space-y-3">
          <div className="bg-slate-900 p-3 rounded-2xl text-white">
            <h4 className="text-[9px] font-black text-red-500 uppercase mb-1">Total GDP Contribution</h4>
            <div className="text-2xl font-black">$137.4 Billion+</div>
          </div>
          <div className="space-y-1.5">
             {[
               { n: "KSA", v: "$55.4B", p: "w-[100%]", c: "bg-green-500" },
               { n: "UAE", v: "$44.8B", p: "w-[80%]", c: "bg-blue-500" },
               { n: "Qatar", v: "$19.0B", p: "w-[35%]", c: "bg-purple-500" },
               { n: "Bahrain", v: "$6.2B", p: "w-[15%]", c: "bg-red-600" }
             ].map((item, i) => (
               <div key={i} className="bg-white p-2 rounded-xl border border-slate-50">
                  <div className="flex justify-between text-[10px] font-bold mb-1">
                    <span className="text-slate-500">{item.n}</span>
                    <span className="text-slate-900">{item.v}</span>
                  </div>
                  <div className="w-full bg-slate-100 h-1 rounded-full"><div className={`${item.c} h-full ${item.p}`}></div></div>
               </div>
             ))}
          </div>
        </div>
      )
    },
    {
      id: "consultancy",
      title: "4. کنسلٹنسی مارکیٹ ($15B+)",
      body: (
        <div className="space-y-2 text-right">
          <div className="p-3 bg-red-50 rounded-xl border border-red-100">
            <h4 className="text-[10px] font-black text-red-700 uppercase">سعودی عرب (لیڈر): $6.0B</h4>
            <p className="text-[9px] text-slate-500 font-bold">وژن 2030 کے میگا پراجیکٹس کی طلب۔</p>
          </div>
          <div className="p-3 bg-slate-50 rounded-xl border border-slate-100">
            <h4 className="text-[10px] font-black text-slate-500 uppercase">یو اے ای: $4.0B</h4>
            <p className="text-[9px] text-slate-500 font-bold">ملٹی نیشنل بزنس حب۔</p>
          </div>
          <div className="p-3 bg-white rounded-xl border border-slate-100">
            <h4 className="text-[10px] font-black text-slate-400 uppercase">بحرین و دیگر: $5.0B+</h4>
            <p className="text-[9px] text-slate-500 font-bold">بحرین فن ٹیک اور اسٹارٹ اپس کا حب۔</p>
          </div>
        </div>
      )
    },
    {
      id: "income",
      title: "5. آمدنی کے 5 ذرائع",
      body: (
        <div className="space-y-2 text-right">
          {[
            { n: "میچ میکنگ کمیشن", p: "3% - 5%", h: true },
            { n: "فل میجڈ سیٹ اپ", p: "1200 BHD" },
            { n: "SaaS سبسکرپشن", p: "450 BHD" },
            { n: "گورنمنٹ API لائسنسنگ", p: "Custom" },
            { n: "B2B لیڈ جنریشن", p: "Variable" }
          ].map((item, i) => (
            <div key={i} className={`flex flex-row-reverse justify-between items-center p-2.5 rounded-xl border ${item.h ? 'bg-slate-900 text-white border-slate-900' : 'bg-white border-slate-50'}`}>
              <span className="text-[10px] font-black">{item.n}</span>
              <span className={`text-[10px] font-bold ${item.h ? 'text-red-400' : 'text-slate-500'}`}>{item.p}</span>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "roadmap",
      title: "6. فنڈنگ کے مختلف فیزز",
      body: (
        <div className="space-y-2">
          {[
            { l: "Angel Round (Now)", v: "25,000 BHD", a: true },
            { l: "Seed Round", v: "100K - 250K BHD" },
            { l: "Round 1 (Series A)", v: "$1.0M - $2.5M" },
            { l: "Round 2 (Series B)", v: "$3.5M - $6.0M" }
          ].map((item, i) => (
            <div key={i} className={`p-3 rounded-xl flex justify-between items-center border ${item.a ? 'bg-red-600 text-white border-red-600' : 'bg-white border-slate-50'}`}>
              <span className="text-[10px] font-black uppercase">{item.l}</span>
              <span className="text-xs font-black">{item.v}</span>
            </div>
          ))}
        </div>
      )
    },
    {
      id: "utilization",
      title: "7. فنڈز کا استعمال (25K)",
      body: (
        <div className="space-y-4 pt-2 text-right">
          <div className="space-y-4">
             {[
               { l: "AI انجن اور انجینئرنگ", p: 60 },
               { l: "مارکیٹنگ اور SEO", p: 25 },
               { l: "قانونی و آپریشنز", p: 15 }
             ].map((item, i) => (
               <div key={i} className="space-y-1">
                  <div className="flex flex-row-reverse justify-between text-[10px] font-black uppercase text-slate-500">
                    <span>{item.l}</span>
                    <span>{item.p}%</span>
                  </div>
                  <div className="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                    <div className="bg-red-600 h-full" style={{ width: `${item.p}%` }}></div>
                  </div>
               </div>
             ))}
          </div>
        </div>
      )
    },
    {
      id: "equity_offer",
      title: "8. ایکویٹی آفر اور ڈیل",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-slate-900 p-5 rounded-[2rem] text-white">
             <div className="flex flex-row-reverse items-center gap-3 mb-2">
                <PieChart size={20} className="text-red-500"/>
                <span className="text-xs font-black uppercase">Angel Allocation</span>
             </div>
             <p className="text-xs font-bold leading-relaxed">
                ہم 25,000 BHD کے بدلے ایکویٹی (Equity) آفر کر رہے ہیں جس کی تفصیلات ٹرم شیٹ (Term Sheet) میں باہمی مشاورت سے طے کی جائیں گی۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "return_timeline",
      title: "9. واپسی کا وقت (Timeline)",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-white p-5 rounded-[2rem] border border-slate-100 shadow-sm">
             <div className="flex flex-row-reverse items-center gap-3 mb-3">
                <Timer size={20} className="text-red-600"/>
                <span className="text-xs font-black text-slate-900">Exit Strategy</span>
             </div>
             <p className="text-[11px] font-bold text-slate-600 leading-relaxed">
                سرمایہ کاری کی واپسی (ROI) کا متوقع وقت <span className="text-red-600">3 سال</span> ہے۔ ایگزٹ بذریعہ ایکوزیشن (Acquisition) یا سیریز اے (Series A) راؤنڈ میں کیش آؤٹ آپشن ہوگا۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "protection",
      title: "10. انویسٹر کا تحفظ",
      body: (
        <div className="space-y-3 text-right">
          <div className="p-4 bg-red-50 rounded-[2rem] border border-red-100">
             <h3 className="text-xs font-black text-slate-900 mb-3 flex flex-row-reverse items-center gap-2">
                <ShieldCheck className="text-green-600" size={18}/> اینجل تحفظ
             </h3>
             <ul className="space-y-2">
                <li className="text-[10px] font-bold text-slate-600 flex flex-row-reverse items-start gap-2">
                   <CheckCircle2 size={12} className="text-red-600 mt-0.5 shrink-0"/>
                   <span>اینٹی ڈائلوشن حقوق (Anti-Dilution)۔</span>
                </li>
                <li className="text-[10px] font-bold text-slate-600 flex flex-row-reverse items-start gap-2">
                   <CheckCircle2 size={12} className="text-red-600 mt-0.5 shrink-0"/>
                   <span>اگلے راؤنڈز میں سرمایہ کاری کا پہلا حق (Pro-rata)۔</span>
                </li>
             </ul>
          </div>
        </div>
      )
    },
    {
      id: "vision",
      title: "11. جی سی سی گیٹ وے لیورج",
      body: (
        <div className="space-y-4 text-right">
          <div className="bg-slate-900 p-6 rounded-[2.5rem] text-white shadow-xl relative overflow-hidden">
             <Globe className="absolute -top-4 -left-4 text-white/5" size={100}/>
             <h3 className="text-lg font-black mb-2 uppercase italic text-red-500">GCC Bridge</h3>
             <p className="text-[11px] font-bold leading-relaxed opacity-90">
                بحرین کو ٹیسٹ بیڈ کے طور پر استعمال کر کے ہم پورے جی سی سی کی $137B کی مارکیٹ کے لیے واحد ڈیجیٹل گیٹ وے بنیں گے۔
             </p>
          </div>
        </div>
      )
    },
    {
      id: "final",
      title: "12. فائنل آفر",
      body: (
        <div className="text-center space-y-4 pt-2">
          <div className="bg-slate-50 p-6 rounded-2xl border border-slate-100">
             <span className="text-[9px] font-black text-red-600 uppercase">مختص کردہ اینجل سرمایہ</span>
             <h3 className="text-2xl font-black text-slate-900 italic">25,000 BHD</h3>
          </div>
          <button className="w-full bg-red-600 text-white py-4 rounded-xl text-sm font-black shadow-lg active:scale-95 transition-all">
             آج ہی رابطہ کریں
          </button>
          <div className="text-[8px] font-black text-slate-300 uppercase tracking-widest pt-2 italic">
            CONFIDENTIAL • BAB AL-KHALEEJ AI 2026
          </div>
        </div>
      )
    }
  ];

  return (
    <div className="min-h-screen bg-slate-100 flex items-center justify-center p-2 font-sans overflow-hidden" dir="ltr">
      <div className="w-full max-w-[360px] bg-white rounded-[2.5rem] shadow-2xl h-[640px] flex flex-col border-[8px] border-slate-950 relative overflow-hidden">
        <div className="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-5 bg-slate-950 rounded-b-xl z-30"></div>
        
        <div className="flex-1 px-6 py-10 overflow-y-auto no-scrollbar">
          <div className="mb-6 flex flex-row-reverse justify-between items-center">
            <div className="bg-red-50 px-2 py-0.5 rounded-lg border border-red-100">
               <span className="text-[8px] font-black text-red-600 uppercase">DECK S26 MASTER</span>
            </div>
            <div className="text-[9px] font-black text-slate-300">{step + 1} / {slides.length}</div>
          </div>
          
          <h2 className="text-xl font-black text-slate-900 mb-4 leading-tight text-right">
            {slides[step].title}
          </h2>

          <div key={step} className="animate-in fade-in slide-in-from-bottom-4 duration-300">
            {slides[step].body}
          </div>
        </div>

        <div className="px-6 pb-8 pt-2 bg-white/95 backdrop-blur-md flex gap-2 border-t border-slate-50">
          <button 
            onClick={() => setStep(s => s > 0 ? s - 1 : 0)}
            className="w-12 h-12 bg-slate-50 rounded-xl flex items-center justify-center text-slate-400 border border-slate-100 active:scale-90"
          >
            <ArrowLeft size={20} />
          </button>
          <button 
            onClick={() => step < slides.length - 1 ? setStep(s => s + 1) : setStep(0)}
            className="flex-1 h-12 bg-red-600 text-white rounded-xl font-black shadow-md flex items-center justify-center gap-2 active:scale-95 transition-all"
          >
            <span className="text-[10px] uppercase tracking-widest">
              {step === slides.length - 1 ? "Review Deck" : "Continue"}
            </span>
            <ArrowRight size={16} />
          </button>
        </div>
      </div>
    </div>
  );
};

export default App;



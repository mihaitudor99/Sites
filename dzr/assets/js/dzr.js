
(function ($) {
  "use strict";

  const translations = {
    ro: {
      navHome:"Acasă", navClinic:"Clinica", navServices:"Servicii", navTeam:"Echipa", navGallery:"Galerie", navContact:"Contact", navCta:"Programează-te",
      heroEyebrow:"DZR CLINICS · STOMATOLOGIE", heroTitle:"Zâmbetul tău.<br><em>Încrederea noastră.</em>",
      heroText:"Îngrijire dentară modernă, personalizată și atent construită în jurul nevoilor fiecărui pacient.",
      heroPrimary:"Programează-te", heroSecondary:"Descoperă serviciile", trustOne:"Plan personalizat", trustTwo:"Tehnologie modernă", trustThree:"Grijă pentru pacient", heroCard:"DENTAL · REFINED · RELIABLE",
      clinicEyebrow:"DESPRE DZR CLINICS", clinicTitle:"Medicină dentară cu o abordare <em>personală.</em>",
      clinicText:"La DZR Clinics, fiecare tratament începe cu înțelegerea pacientului. Combinăm experiența medicală, tehnologia și atenția la detalii pentru planuri de tratament clare și rezultate naturale.",
      feature1Title:"Experiență", feature1Text:"O abordare bazată pe evaluare atentă și comunicare transparentă.",
      feature2Title:"Precizie", feature2Text:"Protocoale moderne și tehnologie aleasă pentru fiecare etapă a tratamentului.",
      feature3Title:"Confort", feature3Text:"Un spațiu calm, elegant și o experiență gândită în jurul pacientului.",
      servicesEyebrow:"SERVICII", servicesTitle:"Tot ce ai nevoie pentru un <em>zâmbet sănătos.</em>", servicesText:"Servicii stomatologice integrate, de la prevenție și tratamente dentare până la reconstrucții și estetică.",
      s1:"Implantologie",s1d:"Soluții moderne pentru înlocuirea dinților lipsă.",s2:"Protetică dentară",s2d:"Reconstrucții funcționale și estetice, adaptate pacientului.",s3:"Estetică dentară",s3d:"Proceduri pentru un zâmbet natural și armonios.",s4:"Ortodonție",s4d:"Planuri personalizate pentru alinierea corectă a dinților.",s5:"Endodonție",s5d:"Tratamentul atent al afecțiunilor pulpare și periapicale.",s6:"Profilaxie & igienizare",s6d:"Prevenție și controale pentru menținerea sănătății orale.",
      teamEyebrow:"ECHIPA",teamTitle:"O echipă medicală care pune <em>încrederea</em> pe primul loc.",teamText:"Aici vom prezenta medicii DZR Clinics, specializările, experiența și ariile lor de interes.",
      doctorRole:"MEDIC STOMATOLOG",doctorName:"Nume Medic",doctorText:"Specializare · competențe · experiență",doctorRole2:"MEDIC STOMATOLOG",doctorName2:"Nume Medic",doctorText2:"Specializare · competențe · experiență",
      galleryEyebrow:"CLINICA",galleryTitle:"Un spațiu creat pentru <em>starea ta de bine.</em>",galleryText:"Fotografiile reale ale clinicii vor fi adăugate aici.",
      faqEyebrow:"ÎNTREBĂRI FRECVENTE",faqTitle:"Îți răspundem la cele mai importante întrebări.",
      q1:"Cum decurge prima consultație?",a1:"Începem cu evaluarea situației orale, discutăm obiectivele și stabilim împreună pașii următori.",
      q2:"Este dureros tratamentul dentar?",a2:"Confortul pacientului este o prioritate. Medicul explică procedura și opțiunile de anestezie înaintea tratamentului.",
      q3:"Cum pot face o programare?",a3:"Ne poți contacta telefonic sau prin formularul de programare. Datele clinicii vor fi completate înainte de lansare.",
      contactEyebrow:"PROGRAMARE",contactTitle:"Hai să vorbim despre <em>zâmbetul tău.</em>",contactText:"Completează formularul, iar echipa DZR Clinics te va contacta pentru stabilirea unei programări.",
      phoneLabel:"Telefon",addressLabel:"Adresă",formName:"Nume",formPhone:"Telefon",formMessage:"Mesaj",formPrivacy:"Sunt de acord cu prelucrarea datelor conform politicii de confidențialitate.",formSubmit:"Solicită o programare",
      footerText:"DZR Clinics — stomatologie modernă, personalizată și orientată spre pacient.",footerNav:"Navigare",footerLegal:"Legal",footerContact:"Contact",rights:"Toate drepturile rezervate.",footerNote:"Website pregătit pentru RO / EN."
    },
    en: {
      navHome:"Home", navClinic:"Clinic", navServices:"Services", navTeam:"Team", navGallery:"Gallery", navContact:"Contact", navCta:"Book an appointment",
      heroEyebrow:"DZR CLINICS · DENTISTRY", heroTitle:"Your smile.<br><em>Our confidence.</em>",
      heroText:"Modern, personalized dental care thoughtfully built around each patient's needs.",
      heroPrimary:"Book an appointment", heroSecondary:"Explore services", trustOne:"Personalized plan", trustTwo:"Modern technology", trustThree:"Patient-first care", heroCard:"DENTAL · REFINED · RELIABLE",
      clinicEyebrow:"ABOUT DZR CLINICS", clinicTitle:"Dental care with a <em>personal</em> approach.",
      clinicText:"At DZR Clinics, every treatment starts with understanding the patient. We combine medical experience, technology and attention to detail to create clear treatment plans and natural-looking results.",
      feature1Title:"Experience", feature1Text:"An approach based on careful assessment and transparent communication.",
      feature2Title:"Precision", feature2Text:"Modern protocols and technology selected for every stage of treatment.",
      feature3Title:"Comfort", feature3Text:"A calm, elegant environment and an experience designed around the patient.",
      servicesEyebrow:"SERVICES", servicesTitle:"Everything you need for a <em>healthy smile.</em>", servicesText:"Integrated dental services, from prevention and restorative care to reconstruction and aesthetics.",
      s1:"Dental implants",s1d:"Modern solutions for replacing missing teeth.",s2:"Prosthodontics",s2d:"Functional and aesthetic restorations tailored to the patient.",s3:"Cosmetic dentistry",s3d:"Treatments designed for a natural, harmonious smile.",s4:"Orthodontics",s4d:"Personalized plans for proper tooth alignment.",s5:"Endodontics",s5d:"Careful treatment of pulpal and periapical conditions.",s6:"Prevention & hygiene",s6d:"Preventive care and regular visits for long-term oral health.",
      teamEyebrow:"TEAM",teamTitle:"A medical team that puts <em>trust</em> first.",teamText:"This section will introduce the DZR Clinics doctors, their specialties, experience and areas of interest.",
      doctorRole:"DENTIST",doctorName:"Doctor Name",doctorText:"Specialty · skills · experience",doctorRole2:"DENTIST",doctorName2:"Doctor Name",doctorText2:"Specialty · skills · experience",
      galleryEyebrow:"THE CLINIC",galleryTitle:"A space designed for your <em>well-being.</em>",galleryText:"Real clinic photography will be added here.",
      faqEyebrow:"FAQ",faqTitle:"Answers to the questions that matter most.",
      q1:"What happens during the first consultation?",a1:"We begin with an oral assessment, discuss your goals and establish the next steps together.",
      q2:"Is dental treatment painful?",a2:"Patient comfort is a priority. Your doctor will explain the procedure and available anesthesia options before treatment.",
      q3:"How can I book an appointment?",a3:"You can contact us by phone or use the appointment form. The clinic details will be completed before launch.",
      contactEyebrow:"APPOINTMENT",contactTitle:"Let's talk about <em>your smile.</em>",contactText:"Complete the form and the DZR Clinics team will contact you to arrange an appointment.",
      phoneLabel:"Phone",addressLabel:"Address",formName:"Name",formPhone:"Phone",formMessage:"Message",formPrivacy:"I agree to the processing of my data according to the privacy policy.",formSubmit:"Request an appointment",
      footerText:"DZR Clinics — modern, personalized, patient-focused dentistry.",footerNav:"Navigation",footerLegal:"Legal",footerContact:"Contact",rights:"All rights reserved.",footerNote:"Website prepared for RO / EN."
    }
  };

  function applyLanguage(lang) {
    const dict = translations[lang] || translations.ro;
    document.documentElement.lang = lang;

    $("[data-i18n]").each(function () {
      const key = $(this).data("i18n");
      if (dict[key] !== undefined) $(this).html(dict[key]);
    });

    $(".lang-switch").text(lang === "ro" ? "EN" : "RO").data("lang", lang === "ro" ? "en" : "ro");
    localStorage.setItem("dzr-lang", lang);

    document.title = lang === "ro"
      ? "DZR Clinics | Clinică dentară modernă"
      : "DZR Clinics | Modern Dental Clinic";

    $('meta[name="description"]').attr("content", lang === "ro"
      ? "DZR Clinics – clinică dentară modernă, cu servicii stomatologice personalizate, tehnologie avansată și o experiență orientată spre confortul pacientului."
      : "DZR Clinics – modern dental clinic offering personalized dental care, advanced technology and a patient-focused experience.");
  }

  $(function () {
    $("#year").text(new Date().getFullYear());

    const saved = localStorage.getItem("dzr-lang") || "ro";
    applyLanguage(saved);

    $(".lang-switch").on("click", function () {
      const target = $(this).data("lang");
      if (target === "en") {
        window.location.href = "/en/";
        return;
      }
      applyLanguage("ro");
    });

    $(".navbar-nav .nav-link, .navbar-nav .btn").on("click", function () {
      const nav = document.getElementById("mainNav");
      if (nav.classList.contains("show")) bootstrap.Collapse.getOrCreateInstance(nav).hide();
    });

    $("#appointmentForm").on("submit", function (e) {
      e.preventDefault();
      $("#formMessage").text(
        document.documentElement.lang === "en"
          ? "Thank you. The form is ready to be connected to the clinic's email/CRM endpoint."
          : "Mulțumim. Formularul este pregătit pentru conectarea la email-ul sau CRM-ul clinicii."
      );
    });
  });
})(jQuery);

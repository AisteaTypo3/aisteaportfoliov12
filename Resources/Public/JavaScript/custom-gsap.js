gsap.registerPlugin(ScrollTrigger);


const sections = document.querySelectorAll('section');

sections.forEach((section, index) => {
  gsap.to(section, {autoAlpha: 1,
    scrollTrigger: {
      trigger: section,
      start: 'top bottom-=100',
      toggleActions: 'play none none reverse',
      // markers: true
    }
  });
  
  ScrollTrigger.create({
    trigger: section,
    id: index+1,
    start: 'top center',
    end: () => `+=${section.clientHeight + 30}`,
    toggleActions: 'play reverse none reverse',
    toggleClass: {targets: section, className: "is-active"},
    // markers: true
  })
})

const skill = document.querySelectorAll('section .frame-type-image');

skill.forEach((skill, index) => {
  gsap.to(skill, {autoAlpha: 1,
    scrollTrigger: {
      trigger: skill,
      start: 'top bottom-=100',
      toggleActions: 'play none none reverse',
    }
  });
  
  ScrollTrigger.create({
    trigger: skill,
    id: index+1,
    start: 'top center',
    end: () => `+=${skill.clientHeight + 30}`,
    toggleActions: 'play reverse none reverse',
    toggleClass: {targets: skill, className: "is-active"},
  })
})




import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

/**
 * Animation presets mapped to data-animate attribute values.
 *
 * Usage in HTML:
 *   data-animate="fade-up"      — fade in + slide up (default)
 *   data-animate="fade-down"    — fade in + slide down
 *   data-animate="fade-left"    — fade in + slide from left
 *   data-animate="fade-right"   — fade in + slide from right
 *   data-animate="fade-in"      — fade in only (no movement)
 *   data-animate="zoom-in"      — fade in + scale up
 *   data-animate="zoom-out"     — fade in + scale down
 *   data-animate="flip-up"      — fade in + rotate X
 *   data-animate="slide-up"     — slide up (no fade)
 *
 * Optional data attributes:
 *   data-animate-delay="0.2"    — delay in seconds
 *   data-animate-duration="1"   — duration in seconds
 *   data-animate-start="top 75%" — ScrollTrigger start position
 *   data-animate-once="true"    — play only once (default: repeats on re-enter)
 *   data-animate-stagger="0.1"  — stagger children with [data-animate-child]
 */
const presets = {
  'fade-up':    { y: 60, autoAlpha: 0 },
  'fade-down':  { y: -60, autoAlpha: 0 },
  'fade-left':  { x: -60, autoAlpha: 0 },
  'fade-right': { x: 60, autoAlpha: 0 },
  'fade-in':    { autoAlpha: 0 },
  'zoom-in':    { scale: 0.85, autoAlpha: 0 },
  'zoom-out':   { scale: 1.15, autoAlpha: 0 },
  'flip-up':    { rotationX: 15, y: 40, autoAlpha: 0, transformPerspective: 800 },
  'slide-up':   { y: 80 },
};

const defaultPreset = 'fade-up';

function initAnimations() {
  const elements = gsap.utils.toArray('[data-animate]');

  elements.forEach((el) => {
    const type = el.getAttribute('data-animate') || defaultPreset;
    const delay = parseFloat(el.getAttribute('data-animate-delay')) || 0;
    const duration = parseFloat(el.getAttribute('data-animate-duration')) || 0.8;
    const start = el.getAttribute('data-animate-start') || 'top 70%';
    const stagger = parseFloat(el.getAttribute('data-animate-stagger')) || 0;
    const once = el.getAttribute('data-animate-once') === 'true';
    const eager = el.hasAttribute('data-animate-eager');

    const from = presets[type] || presets[defaultPreset];
    const to = resetProps(from);

    // Eager mode: corre imediatamente, sem ScrollTrigger
    if (eager) {
      if (stagger > 0) {
        const children = el.querySelectorAll('[data-animate-child]');
        if (children.length) {
          gsap.fromTo(children, from, {
            ...to,
            duration,
            delay,
            stagger,
            ease: 'power2.out',
          });
          return;
        }
      }

      gsap.fromTo(el, from, {
        ...to,
        duration,
        delay,
        ease: 'power2.out',
      });
      return;
    }

    // Stagger mode: animate children instead of the parent
    if (stagger > 0) {
      const children = el.querySelectorAll('[data-animate-child]');
      if (children.length) {
        const tl = gsap.timeline({
          paused: true,
          defaults: { ease: 'power2.out' },
        });
        tl.fromTo(children, from, {
          ...to,
          duration: duration,
          delay: delay,
          stagger: stagger,
        });

        ScrollTrigger.create({
          trigger: el,
          start: start,
          onEnter: () => tl.restart(),
          onLeaveBack: once ? undefined : () => tl.reverse(),
        });
        return;
      }
    }

    // Single element animation — use a timeline for clean reverse
    const tl = gsap.timeline({
      paused: true,
      defaults: { ease: 'power2.out' },
    });
    tl.fromTo(el, from, {
      ...to,
      duration: duration,
      delay: delay,
    });

    ScrollTrigger.create({
      trigger: el,
      start: start,
      onEnter: () => tl.restart(),
      onLeaveBack: once ? undefined : () => tl.reverse(),
    });
  });
}

/**
 * Build a "to" tween object that resets all animated properties to their
 * natural values (0 for transforms, 1 for opacity/scale).
 */
function resetProps(from) {
  const to = {};
  if ('y' in from) to.y = 0;
  if ('x' in from) to.x = 0;
  if ('autoAlpha' in from) to.autoAlpha = 1;
  if ('scale' in from) to.scale = 1;
  if ('rotationX' in from) to.rotationX = 0;
  if ('transformPerspective' in from) to.transformPerspective = 800;
  return to;
}

// Initialise after DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAnimations);
} else {
  initAnimations();
}

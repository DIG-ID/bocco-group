import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { TextPlugin } from 'gsap/TextPlugin';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger, TextPlugin);

// Initialise Lenis
const lenis = new Lenis({
  duration: 1.1,
  smooth: true,
});

// GSAP ScrollTrigger integration with Lenis
// Use GSAP ticker as the single RAF loop — no separate requestAnimationFrame
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

// Expose globally for use in custom.js and other modules
window.lenis = lenis;

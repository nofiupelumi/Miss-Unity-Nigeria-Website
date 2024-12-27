import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

AOS.init({
    disable: false, // Ensure it's enabled
    once: true, // Prevent re-triggering animations
    mirror: false, // Prevent animations when scrolling back
    duration: 1000, // Animation duration
    offset: 120, // Trigger point
    useClassNames: true, // Ensure specific targeting
    initClassName: false, // Disable initial animation on the element
});

// Ensure that no AOS class is accidentally applied to the background image

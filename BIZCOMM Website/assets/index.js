window.onbeforeunload = function() {
    window.scrollTo(0, 0);
}

window.onload = function() {
    location.hash = '';
}

window.addEventListener('load', () => {
    const headings = document.querySelectorAll('h2 a[name]');

    document.addEventListener('scroll', (e) => {
        headings.forEach(ha => {
            const rect = ha.getBoundingClientRect();
            if (rect.top > 0 && rect.top < 150) {
                const location = window.location.toString().split('#')[0];
                history.replaceState(null, null, location + '#' + ha.name);
            }
        });
    });
});
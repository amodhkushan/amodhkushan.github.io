// Mobile nav toggle
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
navToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

// Terminal typing effect
const lines = [
    { prompt: '$', text: 'whoami', delay: 40 },
    { out: 'Amodh Kushan — Full Stack Developer', delay: 20 },
    { prompt: '$', text: 'cat focus.txt', delay: 40 },
    { out: 'Building clean, scalable, and efficient software solutions.', delay: 15 },
    { prompt: '$', text: 'echo $STATUS', delay: 40 },
    { out: 'Available for new projects ✓', accent: true, delay: 20 }
];

const termBody = document.getElementById('termBody');

function typeLine(line, container, cb) {
    const row = document.createElement('div');
    container.appendChild(row);

    if (line.prompt) {
        const promptSpan = document.createElement('span');
        promptSpan.className = 'prompt';
        promptSpan.textContent = line.prompt + ' ';
        row.appendChild(promptSpan);

        const textSpan = document.createElement('span');
        row.appendChild(textSpan);

        let i = 0;
        const interval = setInterval(() => {
            textSpan.textContent += line.text[i];
            i++;
            if (i >= line.text.length) {
                clearInterval(interval);
                setTimeout(cb, 250);
            }
        }, line.delay);
    } else {
        row.className = line.accent ? 'out accent-text' : 'out';
        row.textContent = line.text;
        setTimeout(cb, 300);
    }
}

function runSequence(index) {
    if (index >= lines.length) {
        const cursorRow = document.createElement('div');
        const promptSpan = document.createElement('span');
        promptSpan.className = 'prompt';
        promptSpan.textContent = '$ ';
        cursorRow.appendChild(promptSpan);
        const cursor = document.createElement('span');
        cursor.className = 'cursor';
        cursorRow.appendChild(cursor);
        termBody.appendChild(cursorRow);
        return;
    }
    typeLine(lines[index], termBody, () => runSequence(index + 1));
}

if (termBody) runSequence(0);

// Contact form submission via fetch (Formspree)
const contactForm = document.getElementById('contactForm');
const formStatus = document.getElementById('formStatus');

if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const data = new FormData(contactForm);

        fetch(contactForm.action, {
            method: 'POST',
            body: data,
            headers: { 'Accept': 'application/json' }
        }).then(response => {
            formStatus.classList.remove('d-none', 'ok', 'err');
            if (response.ok) {
                formStatus.textContent = 'Message sent successfully!';
                formStatus.classList.add('ok');
                contactForm.reset();
            } else {
                formStatus.textContent = 'Something went wrong. Please try again.';
                formStatus.classList.add('err');
            }
        }).catch(() => {
            formStatus.classList.remove('d-none', 'ok', 'err');
            formStatus.textContent = 'Something went wrong. Please try again.';
            formStatus.classList.add('err');
        });
    });
}

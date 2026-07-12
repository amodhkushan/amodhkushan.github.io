# Amodh Kushan — Portfolio (Static, GitHub Pages-ready)

A single-page developer portfolio styled like a code editor / terminal —
built as plain HTML/CSS/JS so it can be hosted directly on GitHub Pages
(no PHP, no database, no build step).

## Design

- **Hero**: dark terminal window with a typed intro (`whoami`, focus, status).
- **About**: profile photo + bio + quick stats.
- **Skills**: styled like a `package.json` file, grouped by frontend/backend/tools.
- **Experience**: a timeline of roles/milestones.
- **Projects**: cards styled like open file tabs in an editor.
- **Contact**: dark panel with socials + a working contact form (via Formspree).

Fonts: Space Grotesk (headings), Inter (body), JetBrains Mono (labels/terminal).

## What you need to edit before publishing

Everything editable is marked with an `<!-- EDIT ME -->` comment in `index.html`:

1. **About Me bio** — replace the placeholder paragraphs with your real bio.
2. **Skills** — adjust the chips under `frontend` / `backend` / `tools` to match your real stack.
3. **Experience timeline** — replace the 3 placeholder entries with your real history.
4. **Projects** — replace the 3 placeholder cards with your real projects (title, category, description, image). Duplicate a `.project-card` block for more.
5. **Contact details** — update the email and location in the contact list.
6. **Contact form** — sign up free at https://formspree.io, create a form, and replace `YOUR_FORM_ID` in the form's `action` attribute with your real form ID.

## Deploying to GitHub Pages

1. Create a GitHub repo (e.g. `amodhkushan.github.io`, or any name if only using the custom domain).
2. Push all files here, including the hidden `.nojekyll` and `CNAME`.
3. Repo → **Settings → Pages** → set source to the `main` branch (root).
4. `CNAME` is pre-filled with `amodhkushan.io`. Point your domain's DNS at GitHub Pages
   (see https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site).
5. Wait a few minutes for DNS/Pages to propagate, then visit your site.

## Editing locally

Just open `index.html` in a browser — no build step, no server needed.

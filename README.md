# Portfolio (Static Version)

This is a static (HTML/CSS/JS only) version of your portfolio, converted from the
original PHP + MySQL project so it can be hosted on **GitHub Pages**.

## What changed from the original PHP version

- **No PHP, no database.** GitHub Pages only serves static files — it cannot run
  PHP or connect to MySQL, so the original `Config/DBConnection.php`, admin login,
  and "add project" dashboard could never work there. Those files are not included.
- **Projects are now hardcoded** in `index.html` (see the `<!-- EDIT ME -->` comment
  in the Projects section). There were no projects in your database export, so I
  added 3 placeholder cards — replace the image, title, category, and description
  for each real project, and duplicate the `col-md-4` block for more.
- **Contact form** now submits to [Formspree](https://formspree.io) (free tier)
  instead of PHPMailer, since there's no server to send email from.
  1. Go to https://formspree.io and sign up (free).
  2. Create a new form, and copy the form endpoint it gives you
     (looks like `https://formspree.io/f/abcd1234`).
  3. In `index.html`, find `action="https://formspree.io/f/YOUR_FORM_ID"` and
     replace `YOUR_FORM_ID` with your real ID.
- **Services section** was empty in the original source, so I added three simple
  placeholder service cards — edit or remove them as you like.

## How to deploy to GitHub Pages

1. Create a new GitHub repository (e.g. `amodhkushan.github.io` if you want it at
   the root of your GitHub Pages, or any name if you're only using a custom domain).
2. Push all the files in this folder to that repo (including `.nojekyll` and `CNAME`).
3. In the repo, go to **Settings → Pages**, set the source to the `main` branch
   (root), and save.
4. **Custom domain (amodhkushan.io):** A `CNAME` file is already included with
   `amodhkushan.io` in it. At your domain registrar, point your domain's DNS to
   GitHub Pages (an `A` record to GitHub's IPs, or a `CNAME` record if using a
   subdomain) — see GitHub's guide: 
   https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site
5. Wait a few minutes for DNS/Pages to propagate, then visit your site.

## Editing locally

Just open `index.html` in a browser — no build step, no server needed.

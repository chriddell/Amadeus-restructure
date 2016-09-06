# Amadeus restructure

Purpose of this project is to restructure files/folders in the Amadeus Selling Platform Connect site(s) into a more manageable and developer-friendly format.

## Summary of Changes

- Moved all global assets - that is, stylesheets, scripts, images, video, pdfs, fonts etc. - into own folder at the root of the project (/global-assets). This is easier to maintain and neatly stows away a lot of clutter which was affecting the readability of the root.
- Structure of scripts folder (/js) is now:
    - /lib - contains js libraries - these should be minified and called from a CDN where possible
    - custom scripts live in root of /js
- Bootstrap JS is now called from CDN
- Fonts, images, video and pdfs now live in /assets across all sites (for global, this is inside /global-assets, to keep root clutter-free)
- Call images from /global-assets where possible. Only use images in regional folders where we need regional language version
- Same as above for fonts
- Keep a copy of process.php (for submitting forms to Am. email address) in each regional folder, as we need to redirect to diff. places depending on regional site user sends form from
- As the core bootstrap CSS file which we started with has been so abused (default styles modified, custom styles added) this would take far too long to sort through, so this needs to be left untouched and referenced as a base stylesheet on every project
- Write custom (regional) styles in a new stylesheet, which lives inside /[regional code]/css and should be called [region name].css e.g. czech.css (nb. I am willing sort through current CSS to extract regional style declarations to make this viable)

## Proposal

My proposal is that we structure all sub-sites (regions) in the same way that /cz is in this example.
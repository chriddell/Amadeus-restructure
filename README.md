# Amadeus restructure

Purpose of this project is to restructure files/folders in the Amadeus Selling Platform Connect site(s) into a more manageable and developer-friendly format.

## Changes

- Moved all global assets - that is, stylesheets, scripts, images, video, pdfs, fonts etc. - into own folder at the root of the project (/global-assets). This is easier to maintain and neatly stows away a lot of clutter which was affecting the readability of the root.
- Structure of scripts folder (/js) is now:
    - /lib - contains js libraries - these should be minified and called from a CDN where possible
    - custom scripts live in root of /js
- Bootstrap JS is now called from CDN
- Fonts, images, video and pdfs now live in /assets across all sites (for global, this is inside /global-assets, as this is where all global assets live.
#Silver Cherry

Silver Cherry is a free WordPress Responsive theme built on Zurb's Foundation and the Reverie Framework.

The main focus here is on content and readability. On *any* screen size.

##Main features
The theme view uses two main **media queries**, one for wide viewports (768px and above), and one for smaller viewports (767px and under). You can also test the behaviour by shrinking your browser window.

The extremely low number and weight of images used for developing makes it even more mobile-friendly.
Images added to posts shrink to adapt to viewport on resize events.

##Layout
Based on a 12 col grid system Silver Cherry features a right widgetized sidebar which stacks under the main section in mobile view.


##Menu
The main menu is mostly developed in CSS3 and allows the user to nest up to three levels in depth.
Javascript is only used to increase accuracy when displaying on smaller screen sizes and to allow toggling.

##Typography 
Fonts are sized in **rem** with fallback in **px**, and thought for easy customisation by human beings. 
```css
html { font-size: 62.5%; font-family: Arial, Helvetica, sans-serif; } 
h1 { font-size: 52px; font-size: 5.2rem; margin-bottom: 2px; }
h2 { font-size: 45px; font-size: 4.5rem; margin-bottom: 9px; }
h3 { font-size: 28px; font-size: 2.8rem; margin-bottom: 9px; }
```
If you want to read more on this topic then [here](http://snook.ca/archives/html_and_css/font-size-with-rem) you go.


##Other features

* the number of comments is displayed using CSS3 bubbles as shown by [David Desandro](http://desandro.com/resources/css-speech-bubble-icon/). Still no images.
* comments bubbles get highlighted only in case comments are present.

##Licensing

This theme and all its bundled resources (including images) are released under GPL/MIT licences.

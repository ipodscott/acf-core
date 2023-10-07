# ACF Core plug in

This is a self contained plugin that works with Advanced Custom Fields Pro. If ACF is installed this will add additional Gutenberg Blocks
Update 211028: Added an Attributes to help with integation of animation libraries like AOS. 
- Updated 21/10/7 Updated Audio Button, Video Button and Accordion blocks. Adding the video buttond and audio buttond inside a class named jukebox will make them autoplay to the audio/video clip.
- Updated 23/10/1 Blocks no longer need to be manually added via acf-core.php. To add a block add it to the active directory.
- Updated 23/10/1 Updated the Modal Video block and the Audio Block to fix styling issues with WordPress 6.1.x.
- Primary Content Block: A collapsable block that can be use to help manage any content. Helps with pages that are particularly long.
- Accordion: A basic accordion with an component that the user add any kind of additional block
- Audio Button: Button that opens a plyr.js based audio player
- Gallery: Fancybox based gallery
- Preso Preview - This will iframe any url into a modal window.
- Video Button - Modal video player that supports remote and uploaded mp4, youtube, wistia, and vimeo.

Each module is completely self contained and includes it's own JSON, JS and CSS dependencies and can be installed on any site that's using the pro version of Advanced Custom Fields.

**This was originally built as part of a theme and I'm in the process of converting it to a plugin so there is some optimization and fixes that I'm in the process of adding.**

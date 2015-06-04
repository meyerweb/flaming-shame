# flaming-shame

Turning raster images into SVG files, one pixel at a time.  Yes, really.

Note that the code is, at this point (June 2015), only marginally less gross than the concept.

## What?

The PHP accepts a raster image (GIF, PNG, JPEG, that sort of thing) and creates an SVG image that recreates the raster image.  It does this by drawing a filled rectangle for each pixel in the image.

## Why?

Mostly, because of two things Chris Coyier said in his talk “The Wonderful World of SVG”.

The first was that you shouldn’t use SVG For something like a photo, because it would end up being way larger than a raster-format version of the same image.  Sure, makes sense.

The second was that gzip, which pretty much every web server supports, worked by compressing similar runs of text, and that’s why SVGs are so compressable.

The two collided in my brain, and I thought: since a rectangle-per-pixel SVG would be highly repetitive, might the gzipped version actually be smaller than the raster image?

So I decided to find out.

## Who?

[Eric Meyer](http://meyerweb.com/), sometime CSS guy.  Eric A. Meyer if you’re nasty.

Chris Coyier, as mentioned, and Steve Champeon, both provided inspiration.  Why Steve? Because I believe Steve did something very similar with `div`s, way back in the day.  And even if he didn’t, he inspired me in a lot of other ways and deserves credit.  I’m really sorry it came in this context, Steve.

## When?

I wrote the code in mid-May 2015, very shortly after hearing Chris’ talk at [An Event Apart](http://aneventapart.com/) Boston.  It was pushed to GitHub in early June 2015.  Further bulletins as events warrant.

## Seriously, why?

That really is why.  Welcome to my brain.

---
layout: games/2018/g
---

# Assignment 0: "Pong, The AI Update"

## Objectives

* Read and understand all of the Pong source code from Lecture 0.
* Implement a basic AI for either Player 1 or 2 (or both!).

### Your First Game

Download the distro code for your first game from <https://cdn.cs50.net/games/2018/spring/assignments/0/assignment0.zip> and unzip `assignment0.zip`, which should yield a directory called `assignment0`.

Then, in a terminal window (located in `/Applications/Utilities` on Mac or by typing 
`cmd` in the Windows task bar), move to the directory where you extracted `assignment0` 
(recall that the `cd` command can change your current directory), and run

```
cd assignment0
```

## It's Game Time

Your first assignment in the course will be a fairly easy one,
since the dive into game programming can be deep enough as it is without having to implement an
entire code base from scratch! Instead, we'll take the Pong example we covered in class and
extend it in a small but fun way by giving one of the paddles (or perhaps both) logic for playing
the game so that you don't always need a buddy to play the game with you! We'll approach problem
sets in the course this way generally, taking the full code bases we've used in lecture and extending
them so that you'll get plenty of experience interacting with fully implemented games. You can even
use these projects as templates and jumping boards for your own games!

Of course, the code won't run if you don't have LÖVE2D installed, so we'll have to tackle that in addition to
grabbing the code; the course uses version 0.10.2 for its source code, so do just choose the appropriate distribution of that version for your system here:

[https://bitbucket.org/rude/love/downloads/](https://bitbucket.org/rude/love/downloads/)

For further information on how to actually run games, do just visit the following page:

[https://love2d.org/wiki/Getting_Started](https://love2d.org/wiki/Getting_Started)

Once the code and LÖVE2D have been downloaded and installed, the actual change you'll be making to the code base is
small, but it will require you to understand what many of the pieces do, so be sure to watch Lecture 0 and read 
through the code so you have a firm understanding of how it works before diving in! In particular, take note of how
paddle movement works, reading both the `Paddle` class as well as the code in `main.lua` that actually drives the 
movement, located in the `update` function (currently done using keyboard input for each). If our agent's goal is 
just to deflect the ball back toward the player, what needs to drive its movement?

Your goal:

* Implement an AI-controlled paddle (either the left or the right will do) such that it will try to deflect
the ball at all times. Since the paddle can move on only one axis (the Y axis), you will need to determine how to
keep the paddle moving in relation to the ball. Currently, each paddle has its own chunk of code where input is
detected by the keyboard; this feels like an excellent place to put the code we need! Once either the left or right
paddle (or both, if desired) try to deflect the paddle on their own, you've done it!

## How to Submit

__Coming Soon__

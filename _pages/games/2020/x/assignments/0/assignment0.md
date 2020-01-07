---
layout: games/2020/g
---

# Assignment 0: "Pong, The AI Update"

## Objectives

* Read and understand all of the Pong source code from Lecture 0.
* Implement a basic AI for either Player 1 or 2 (or both!).

### Your First Game

Download the distribution code for your game from <https://cdn.cs50.net/games/2019/x/assignments/0/assignment0.zip> and unzip `assignment0.zip`, which should yield a directory called `assignment0`.

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

1. Visit [this link](https://submit.cs50.io/invites/46e6f2ea29954ce9bb1bdc478a440055), log in with your GitHub account, and click **Authorize cs50**. Then, check the box indicating that you'd like to grant course staff access to your submissions, and click **Join course**.
1. [Install Git](https://git-scm.com/downloads) and, optionally, [install `submit50`](https://cs50.readthedocs.io/submit50/).
1. Using Git, push your work to `https://github.com/me50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `games50/assignments/2020/x/0` or, if you've installed `submit50`, execute

   ```
   submit50 games50/assignments/2020/x/0
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/63cadd37-9db2-4922-b85d-fb85a760b261).

You can then go to [https://cs50.me/cs50g](https://cs50.me/cs50g) to view your current progress!

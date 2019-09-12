---
layout: games/2019/g
---

# Assignment 1: "Flappy Bird, The Reward Update"

## Objectives

* Read and understand all of the Flappy (Fifty!) Bird source code from Lecture 1.
* Influence the generation of pipes so as to bring about more complicated level generation.
* Give the player a medal for their performance, along with their score.
* Implement a pause feature, just in case life gets in the way of jumping through pipes!

## Getting Started

Download the distro code for your first game from <https://cdn.cs50.net/games/2019/x/assignments/1/assignment1.zip> and unzip `assignment1.zip`, which should yield a directory called `assignment1`.

Then, in a terminal window (located in `/Applications/Utilities` on Mac or by typing
`cmd` in the Windows task bar), move to the directory where you extracted `assignment1`
(recall that the `cd` command can change your current directory), and run

```
cd assignment1
```

## Flapping Your Wings

Your second assignment won't be quite as easy as last week's, but don't worry! The pieces, taken one at a time,
are still quite bite-sized and manageable and will mainly be a recap of what we've covered thoroughly in lecture
leading up to this point :) For a refresher on LÖVE2D, as well as some helpful links for getting started, do just
visit the following:

[https://love2d.org/](https://love2d.org/)

[https://love2d.org/wiki/Getting_Started](https://love2d.org/wiki/Getting_Started)

Be sure to watch Lecture 1 and read through the code so you have a firm understanding of how it works before diving in!
In particular, take note of where the logic is for spawning pipes and the parameters that drive both the gap between pipes
and the interval at which pipes spawn, as those will be two primary components of this update! You'll be making some notable
changes to the ScoreState, so be sure to read through that as well and get a sense for how images are stored, since you'll be
incorporating your own! Lastly, think about what you need in order to incorporate a pause feature (a simple version of which
we saw in lecture!). And if we want to pause the music, we'll probably need a method to do this that belongs to the audio object
LÖVE gives us when we call `love.audio.newSource`; try browsing the documentation on the LÖVE2D wiki to find out what it is!

Your goals this assignment:

* Randomize the gap between pipes (vertical space), such that they're no longer hardcoded to 90 pixels.
* Randomize the interval at which pairs of pipes spawn, such that they're no longer always 2 seconds apart.
* When a player enters the ScoreState, award them a "medal" via an image displayed along with the score; this can be any image or
any type of medal you choose (e.g., ribbons, actual medals, trophies, etc.), so long as each is different and based on the points they
scored that life. Choose 3 different ones, as well as the minimum score needed for each one (though make it fair and not too hard to
test :)).
* Implement a pause feature, such that the user can simply press "P" (or some other key) and pause the state of the game. This pause
effect will be slightly fancier than the pause feature we showed in class, though not ultimately that much different. When they pause
the game, a simple sound effect should play (I recommend testing out bfxr for this, as seen in Lecture 0!). At the same time this sound
effect plays, the music should pause, and once the user presses P again, the gameplay and the music should resume just as they were! To
cap it off, display a pause icon in the middle of the screen, nice and large, so as to make it clear the game is paused.

## How to Submit

1. If you haven't already, [install Git](https://git-scm.com/downloads) and, optionally, [install `submit50`](https://cs50.readthedocs.io/submit50/).
1. Using Git, push your work to `https://github.com/me50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `games50/assignments/2019/x/1` or, if you've installed `submit50`, execute

   ```
   submit50 games50/assignments/2019/x/1
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/6d2b0089-06f9-4072-9598-6c4e85730aa5).

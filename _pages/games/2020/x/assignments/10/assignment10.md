---
layout: games/2020/g
---

# Assignment 10: "Portal, The ProBuilder Update"

## Objectives

* Create your own level in a new scene using ProBuilder and ProGrids!
* Ensure that the level has an `FPSController` to navigate with in the scene.
* Ensure that there is an object or region with a trigger at the very end that will trigger the end of the level (some zone with an invisible `BoxCollider` will work).
* When the level ends, display "You Won!" on the screen with a `Text` object.

## Getting Started

Download the distro code for your game from <https://cdn.cs50.net/games/2020/x/assignments/10/assignment10.zip> and unzip `assignment10.zip`, which should yield a directory called `assignment10`.

Then, in a terminal window (located in `/Applications/Utilities` on Mac or by typing
`cmd` in the Windows task bar), move to the directory where you extracted `assignment10`
(recall that the `cd` command can change your current directory), and run

```
cd assignment10
```

## Becoming a Pro

Welcome to your tenth and final assignment! This assignment is going to be a fun conclusion to what's been a challenging but hopefully exciting term! Rather than build upon Portal in this example, and to afford you some extra time for your final project (and hopefully save a little stress!), we're going to leverage some of Unity's brand-new tools to create a level! ProBuilder and ProGrids are a key feature that's changed the game for Unity, and having them makes creating game worlds (and more!) all the easier.

Your goal this assignment:

* *Create your own level in a new scene using ProBuilder and ProGrids!* The distro should already have ProBuilder and ProGrids imported and ready for use, but just in case they aren't, you can easily find them by searching in the Asset Store (where they are now free, thanks to Unity having acquired them!). There are many resources for learning how to use ProGrids effectively, but two resources in particular that are worth checking out are [here](https://www.youtube.com/watch?v=PUSOg5YEflM) and [here](https://procore3d.github.io/probuilder2/), which should more than prepare you for creating a simple level.
* *Ensure that the level has an `FPSController` to navigate with in the scene.* This part's probably the easiest; just import an FPSController from the Standard Assets! It should already be imported into the project in the distro, where you can find the prefabs under `Assets > Standard Assets > Characters > FirstPersonCharacter > Prefabs`!
* *Ensure that there is an object or region with a trigger at the very end that will trigger the end of the level (some zone with an invisible `BoxCollider` will work).* This one should be easy as well, just relying on the creation of an empty GameObject and giving it a `BoxCollider` component, which you can then resize via its resize button in the component inspector!
* *When the level ends, display "You Won!" on the screen with a `Text` object.* Recall that `OnTriggerEnter` is the function you'll need to write in a script you also associate with the `BoxCollider` trigger, and ensure that the `BoxCollider` is set to a trigger in the inspector as well! Then simply program the appropriate logic to toggle on the display of a `Text` object that you also include in your scene (for an example on how to do this, just see the Helicopter Game 3D project, specifically the `GameOverText` script)!


## How to Submit

1. If you haven't done so already, visit [this link](https://submit.cs50.io/invites/46e6f2ea29954ce9bb1bdc478a440055), log in with your GitHub account, and click **Authorize cs50**. Then, check the box indicating that you'd like to grant course staff access to your submissions, and click **Join course**.
1. Using [Git](https://git-scm.com/downloads), push your work to `https://github.com/me50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `games50/assignments/2020/x/10` or, if you've installed [`submit50`](https://cs50.readthedocs.io/submit50/), execute

   ```
   submit50 games50/assignments/2020/x/10
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/cd08dec6-1e3d-47ef-a219-594c104d790e).

You can then go to [https://cs50.me/cs50g](https://cs50.me/cs50g) to view your current progress!

---
layout: games/2020/g
---

# Assignment 7: "Pokémon, The Level-Up Update"

## Objectives

* Read and understand all of the Pokémon source code from Lecture 7.
* Implement a `Menu` that appears during the player Pokémon's level up that shows, for each stat, 'X + Y = Z', where X is the starting stat, Y is the amount it's increased for this level, and Z is the resultant sum. This `Menu` should appear right after the "Level Up" dialogue that appears at the end of a victory where the player has indeed leveled up.

## Getting Started

Download the distro code for your game from <https://cdn.cs50.net/games/2019/x/assignments/7/assignment7.zip> and unzip `assignment7.zip`, which should yield a directory called `assignment7`.

Then, in a terminal window (located in `/Applications/Utilities` on Mac or by typing
`cmd` in the Windows task bar), move to the directory where you extracted `assignment7`
(recall that the `cd` command can change your current directory), and run

```
cd assignment7
```

## Next-Level

Welcome to your seventh assignment! This week's code will probably be the most complicated we'll look at during the semester, but the assignment itself is fairly small in comparison; you will, however, need to know how many of the pieces work and fit together in order to accomplish the task ahead.

Your goal this assignment:

* *Implement a `Menu` that appears during the player Pokémon's level up that shows, for each stat, 'X + Y = Z', where X is the starting stat, Y is the amount it's increased for this level, and Z is the resultant sum. This `Menu` should appear right after the "Level Up" dialogue that appears at the end of a victory where the player has indeed leveled up.* The area where most of this will take place is the `TakeTurnState`, specifically in the `:victory()` function, where the actual detection of a level up takes place. Ordinarily, just a `BattleMessageState` gets pushed onto the `StateStack`, but we'll need to go a step further and push an additional `Menu` in order to accomplish what we're after. This `Menu` should not have a cursor like the other `Menu` we're used to seeing (in the `BattleMenuState`!), so you'll need to customize the `Selection` class a little bit in order to take a boolean value to turn the cursor on or off as needed (defaulting to `true` if needed to preserve the behavior of the `Menu` in the `BattleMenuState`). Note that the `:levelUp()` function in the `Pokemon` class returns all of the stat increases we need in order to display things properly, so be sure to use those returned values when creating the `Menu`! As long as you get a proper grasp on the `Selection`, `Menu`, and `StateStack` classes, this assignment should be relatively straightforward in comparison to the complexity of this week's code as a whole!

## How to Submit

1. If you haven't done so already, visit [this link](https://submit.cs50.io/invites/46e6f2ea29954ce9bb1bdc478a440055), log in with your GitHub account, and click **Authorize cs50**. Then, check the box indicating that you'd like to grant course staff access to your submissions, and click **Join course**.
1. Using [Git](https://git-scm.com/downloads), push your work to `https://github.com/me50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `games50/assignments/2020/x/7` or, if you've installed [`submit50`](https://cs50.readthedocs.io/submit50/), execute

   ```
   submit50 games50/assignments/2020/x/7
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/20258fed-44dc-4498-a55c-7e779eae1e17).

You can then go to [https://cs50.me/cs50g](https://cs50.me/cs50g) to view your current progress!

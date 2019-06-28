---
layout: web/2019/w
---

# Project 0: Homepage

## Objectives

* Become more comfortable with HTML and CSS to design and style webpages.
* Learn to use SCSS to write more complex stylesheets for your webpages.

## Getting Started

### Your First Webpage

Download the distro code for this project from <https://cdn.cs50.net/web/2019/x/projects/0/project0.zip> and unzip `project0.zip`, which should yield a directory called `project0`.

Then, in a terminal window (located in `/Applications/Utilities` on Mac or by typing
`cmd` in the Windows task bar), move to the directory where you extracted `project0`
(recall that the `cd` command can change your current directory), and run

```
cd project0
```

to enter the project directory. Now, run

```
touch index.html
```

to create a new `index.html` file in your repository. Open the file with your
favorite text editor: popular choices include [Atom](https://atom.io/),
[Sublime Text](https://www.sublimetext.com/), and [VS
Code](https://code.visualstudio.com/). Then, paste in the following contents:

```html
<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        Hello, world!
    </body>
</html>
```

Then, save your `index.html` file.

## Requirements

Alright, now it's time to make your website your own. Design a personal webpage
about yourself, one of your interests, or any other topic of your choice. The
subject matter, look and feel, and design of the site are entirely up to you,
subject to the following requirements:

* Your website must contain at least four different `.html` pages, and it
  should be possible to get from any page on your website to any other page by
  following one or more hyperlinks.
* Your website must include at least one list (ordered or unordered), at least
  one table, and at least one image.
* Your website must have at least one stylesheet file.
* Your stylesheet(s) must use at least five different CSS properties, and at
  least five different types of CSS selectors. You must use the `#id` selector
  at least once, and the `.class` selector at least once.
* Your stylesheet(s) must include at least one mobile-responsive `@media` query,
  such that something about the styling changes for smaller screens.
* You must use Bootstrap 4 on your website, taking advantage of at least one
  Bootstrap [component](https://getbootstrap.com/docs/4.3/components/),
  and using at least two Bootstrap columns for layout purposes using
  Bootstrap's [grid model](https://getbootstrap.com/docs/4.3/layout/grid/).
* Your stylesheets must use at least one SCSS variable, at least one example of
  SCSS nesting, and at least one use of SCSS inheritance.
* In `README.md`, include a short writeup describing your project, what's
  contained in each file, and (optionally) any other additional information the
  staff should know about your project.

Note that not all of the above requirements are covered in Lecture 0, some will
be introduced in Lecture 1.

## How to Submit

1. Visit [cs50.me](https://cs50.me/), log in with your GitHub account, and click **Authorize submit50**. You should receive two emails from GitHub inviting you to join CS50’s "organizations" on GitHub. Click the button in those emails to accept both of the invitations.
1. [Install Git](https://git-scm.com/downloads) and, optionally, [install `submit50`](https://cs50.readthedocs.io/submit50/).
1. Using Git, push your work to `https://github.com/submit50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `cs50/web/2019/x/projects/0` or, if you've installed `submit50`, execute

   ```
   submit50 cs50/web/2019/x/projects/0
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/a8a742ce-32c4-4064-b450-3518de633fec).

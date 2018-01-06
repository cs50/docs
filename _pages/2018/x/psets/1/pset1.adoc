---
layout: 2018/x
toc: false
---
:skip-front-matter:

= Problem Set 1: C

== tl;dr

[start=0]
. Watch https://video.cs50.net/2018/x/lectures/1[Week 1's first lecture].
. Get your CS50 IDE set up with `hello.c`.
. Recreate one of Mario's pyramids, in `mario.c`.
. Accept some cash in `cash.c` or credit in `credit.c`.
. Submit your code.

== Getting Started

Recall that CS50 IDE is a web-based "integrated development environment" that allows you to program "in the cloud," without installing any software locally. Underneath the hood is a popular operating system, Ubuntu Linux, that's been "containerized" with open-source software called Docker, that allows multiple users (like you!) to share the operating system's "kernel" (its nucleus, so to speak) and files, even while having files of their own. Indeed, CS50 IDE provides you with your very own "workspace" (i.e., storage space) in which you can save your own files and folders (aka directories).

=== Logging In

Head to https://cs50.io/[cs50.io] and log into CS50 IDE. You may be prompted (again) for your email address. If so, after providing it, click *Private* under *Hosted workspace*, then choose *Harvard's CS50* under *Choose a template*, and click *Create workspace*.

You should then be informed that CS50 IDE (aka Cloud9, the software that underlies CS50 IDE) is "creating your workspace" and "creating your container," which might take a moment. You should eventually see your workspace, which should resemble David's from Week 1. If not, do just email the course's heads to inquire!

=== Updating

Toward the bottom of CS50 IDE's UI is a "terminal window" (light blue, by default), a command-line interface (CLI) that allows you to explore your workspace's files and directories, compile code, run programs, and even install new software. You should find that its "prompt" resembles the below.

[source]
----
~/workspace/ $
----

Click inside of that terminal window and then type

[source]
----
update50
----

followed by Enter to ensure that your workspace is up-to-date. It might take a few minutes for any updates to complete. (Be sure not to close the tab or CS50 IDE itself until they do!)

Next, execute

[source]
----
mkdir ~/workspace/pset1/
----

at your prompt in order to make a directory called `pset1` in your `workspace` directory. Take care not to overlook the space between `mkdir` and `~/workspace/pset1/` or any other character for that matter! Keep in mind that `~` denotes your home directory, `~/workspace/` denotes a directory called `workspace` therein, and `~/workspace/pset1/` denotes a directory called `pset1` within `~/workspace/`.

Now execute

[source]
----
cd ~/workspace/pset1/
----

to move yourself into (i.e., open) that directory. Your prompt should now resemble the below.

[source]
----
~/workspace/pset1/ $
----

If not, retrace your steps and see if you can determine where you went wrong. You can actually execute

[source]
----
history
----

at the prompt to see your last several commands in chronological order if you'd like to do some sleuthing. You can also scroll through the same one line at a time by hitting your keyboard's up and down arrows; hit Enter to re-execute any command that you'd like.

== What to Do

. Implement link:hello/hello.html[Hello]
. Implement either of:
+
--
* link:mario/less/mario.html[Mario], less comfortable
* link:mario/more/mario.html[Mario], more comfortable
--
+
. Implement either of:
+
--
* link:cash/cash.html[Cash], less comfortable
* link:credit/credit.html[Credit], more comfortable
--

== How to Submit

. Log into https://cs50.io/[CS50 IDE] and open a terminal window, if not open already.
. Submit Hello by executing:
+
[source]
----
cd ~/workspace/pset1/hello
submit50 cs50/2018/x/hello
----
. Submit either or both of:
+
--
* Mario, less comfortable, by executing:
+
[source]
----
cd ~/workspace/pset1/mario/less
submit50 cs50/2018/x/mario/less
----
* Mario, more comfortable, by executing:
+
[source]
----
cd ~/workspace/pset1/mario/more
submit50 cs50/2018/x/mario/more
----
--
. Submit either or both of:
+
--
* Cash, by executing:
+
[source]
----
cd ~/workspace/pset1/cash
submit50 cs50/2018/x/cash
----
* Credit, by executing:
+
[source]
----
cd ~/workspace/pset1/credit
submit50 cs50/2018/x/credit
----
--

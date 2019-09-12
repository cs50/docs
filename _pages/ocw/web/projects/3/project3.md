---
layout: web/2019/w
---

# Project 3: Pizza

## Objectives

* Become more comfortable with Django.
* Gain experience with relational database design.

## Overview

In this project, you'll build an web application for handling a pizza
restaurant's online orders. Users will be able to browse the restaurant's menu,
add items to their cart, and submit their orders. Meanwhile, the restaurant
owners will be able to add and update menu items, and view orders that have
been placed.

## Milestones

We recommend that you try to meet the following milestones in order:

* Complete the Menu, Adding Items, and Registration/Login/Logout steps.
* Complete the Shopping Cart and Placing an Order steps.
* Complete the Viewing Orders and Personal Touch steps.

## Getting Started

### Python and Django

As with Projects 1 and 2, make sure  that you have  a copy of [Python
3.6](https://www.python.org/downloads/) or higher installed on your machine.
You'll also need to install `pip`. If you downloaded Python from Python's
website, you likely already have `pip` installed (you can check by running
`pip` in a terminal window). If you don't have it installed, be sure to
[install it](https://pip.pypa.io/en/stable/installing/) before moving on!

To run this Django application:

1. Download the `project3` distribution code from https://cdn.cs50.net/web/2019/x/projects/3/project3.zip and unzip it.
2. In a terminal window, navigate into your `project3` directory. Note that this
   is the directory for a Django project called `pizza`, inside of which is an
   app already created for you called `orders`.
3. Run `pip3 install -r requirements.txt` in your terminal window to make sure
   that all of the necessary Python packages (Django, in this instance) are
   installed.
4. Run `python manage.py runserver` to start up your Django application.
5. If you navigate to the URL provided by Django, you should see the text
   `"Project 3: TODO"`!

## Requirements

Alright, it's time to actually build your web application! Here are the
requirements:

* **Menu**: Your web application should support all of the available menu items
  for [Pinnochio's Pizza & Subs](http://www.pinocchiospizza.net/menu.html) (a
  popular pizza place in Cambridge). It's up to you, based on analyzing the menu
  and the various types of possible ordered items (small vs. large, toppings,
  additions, etc.) to decide how to construct your models to best represent the
  information. Add your models to `orders/models.py`, make the necessary
  migration files, and apply those migrations.
* **Adding Items**: Using Django Admin, site administrators (restaurant owners)
  should be able to add, update, and remove items on the menu. Add all of the
  items from the Pinnochio's menu into your database using either the Admin UI
  or by running Python commands in Django's shell.
* **Registration, Login, Logout**: Site users (customers) should be able to
  register for your web application with a username, password, first name, last
  name, and email address. Customers should then be able to log in and log out
  of your website.
* **Shopping Cart**: Once logged in, users should see a representation of the
  restaurant's menu, where they can add items (along with toppings or extras, if
  appropriate) to their virtual "shopping cart." The contents of the shopping
  should be saved even if a user closes the window, or logs out and logs back in
  again.
* **Placing an Order**: Once there is at least one item in a user's shopping
  cart, they should be able to place an order, whereby the user is asked to
  confirm the items in the shopping cart, and the total (no need to worry about
  tax!) before placing an order.
* **Viewing Orders**: Site administrators should have access to a page where
  they can view any orders that have already been placed.
* **Personal Touch**: Add at least one additional feature of your choosing to
  the web application. Possibilities include: allowing site administrators to
  mark orders as complete and allowing users to see the status of their pending
  or completed orders, integrating with the [Stripe](https://stripe.com/docs)
  API to allow users to actually use a credit card to make a purchase during
  checkout, or supporting sending users a confirmation email once their purchase
  is complete. If you need to use any credentials (like passwords or API
  credentials) for your personal touch, be sure not to store any credentials in
  your source code, better to use environment variables!
* In `README.md`, include a short writeup describing your project, what's
  contained in each file you created or modified, and (optionally) any other
  additional information the staff should know about your project. Also, include
  a description of your personal touch and what you chose to add to the project.
* If you've added any Python packages that need to be installed in order to run
  your web application, be sure to add them to `requirements.txt`!

Beyond these requirements, the design, look, and feel of the website are up to
you! You're also welcome to add additional features to your website, so long as
you meet the requirements laid out in the above specification!

## Hints

* Unlike in Project 1, you shouldn't need to build your application's entire
  login and authentication system yourself. Feel free to use Django's built-in
  users and authentication system to simplify the process of logging users in
  and out.
* Before diving into writing your models, you'll likely want to think carefully
  about the different types of menu items and how best to organize them. Some
  questions to consider include: how should you represent the different prices
  for large and small versions of the same dish? Where do toppings fit into your
  model for pizzas, and how do you calculate the ultimate price of a pizza? How
  will you make the custom add-ons for the subs work?

## FAQs

### What is a "Special" pizza?

It's up to you to decide what a "special" pizza means, and to implement it
accordingly. It could be one particular set of toppings, allowing up to 5
different types of toppings, or something else entirely!

## How to Submit

1. If you haven't already, [install Git](https://git-scm.com/downloads) and, optionally, [install `submit50`](https://cs50.readthedocs.io/submit50/).
1. Using Git, push your work to `https://github.com/me50/USERNAME.git`, where `USERNAME` is your GitHub username, on a branch called `web50/projects/2019/x/3` or, if you've installed `submit50`, execute

   ```
   submit50 web50/projects/2019/x/3
   ```

   instead.
1. [Record a 1- to 5-minute screencast](https://www.howtogeek.com/205742/how-to-record-your-windows-mac-linux-android-or-ios-screen/) in which you demonstrate your app's functionality and/or walk viewers through your code. [Upload that video to YouTube](https://www.youtube.com/upload) (as unlisted or public, but not private) or somewhere else.
1. [Submit this form](https://forms.cs50.io/e980a817-6269-413c-9415-289907147cea).

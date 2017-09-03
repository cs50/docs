# CS50 Docs
[![Build Status](https://travis-ci.org/cs50/docs.svg?branch=master)](https://travis-ci.org/cs50/docs)

# Usage

1. Edit `2017/*`.
1. `git add ...`
1. `git commit`
1. `git push`
1. View http://docs.cs50.net/path/to/file.html after a few seconds.

_If your changes do not affect the rendered files under `docs/` (e.g., changes to `.gitignore`), be sure to include `[skip ci]` in the message of the last commit before you push to avoid triggering a build, which would fail, as there would be no changes to deploy._

# Viewing Changes Locally

1. Install [Docker Engine](https://docs.docker.com/engine/installation/).
1. `make container`
1. `make docs`
1. View `docs/*`.

# TODO

* Move copies of `problems/*` into `2016/` and `2017/`.
  * Add `layout: 2016/fall` and `layout: 2017/spring` and `layout: 2017/x` to front matter.

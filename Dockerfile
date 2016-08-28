FROM cs50/cli

RUN apt-add-repository -y ppa:brightbox/ruby-ng && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive sudo -E apt-get install -y ruby2.3 ruby2.3-dev && \
    gem install jekyll-asciidoc pygments.rb

RUN echo "This is CS50 CLI with Jekyll." > /etc/motd

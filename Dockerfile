FROM cs50/cli

# jekyll-asciidoc
# https://github.com/asciidoctor/jekyll-asciidoc/issues/135#issuecomment-241948040
# https://github.com/asciidoctor/jekyll-asciidoc#development
COPY Gemfile /tmp
COPY Gemfile.lock /tmp
RUN apt-get update && \
    apt-add-repository -y ppa:brightbox/ruby-ng && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y ruby2.3 ruby2.3-dev && \
    gem install bundler && \
    bundle install --gemfile=/tmp/Gemfile --system && \
    rm -f /tmp/Gemfile /tmp/Gemfile.lock

# override MOTD
RUN echo "This is CS50 CLI with Jekyll." > /etc/motd

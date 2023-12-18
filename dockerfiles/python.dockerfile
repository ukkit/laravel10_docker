FROM python:3.9.17-slim-buster

ENV TINI_VERSION="v0.19.0"

ADD https://github.com/krallin/tini/releases/download/${TINI_VERSION}/tini /tini
RUN chmod +x /tini

# 👇 STYLE YOUR DOCKERFILE LIKE A PRO
RUN pip install -U \
    pip \
    setuptools \
    wheel

WORKDIR /project

RUN useradd -m -r user && \
    chown user /project

COPY requirements.txt ./
RUN pip install -r requirements.txt

COPY ./python .

USER user

ARG GIT_HASH
ENV GIT_HASH=${GIT_HASH:-dev}

ENTRYPOINT ["/tini", "--"]

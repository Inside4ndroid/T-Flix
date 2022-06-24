T-Flix-server
===============

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]

<img src="https://cdn.jsdelivr.net/gh/asapach/T-Flix-server@master/app/images/logo.png" alt="logo" height="256">

Streaming torrent client for node.js with web ui.

![screen capture](https://cdn.jsdelivr.net/gh/asapach/T-Flix-server@master/capture.gif)

Based on [torrent-stream](https://github.com/mafintosh/torrent-stream), inspired by [T-Flix](https://github.com/mafintosh/T-Flix).

## Usage

1. `npm install -g T-Flix-server`
1. `T-Flix-server`
1. Open your browser at [http://localhost:9000/](http://localhost:9000/)
1. Enjoy!

## Configuration

You can configure the application using `config.json` file (doesn't exist by default).
The [options](https://github.com/mafintosh/torrent-stream#full-api) are passed to all torrent-stream instances.
Here's an example that overrides the defaults:

```json
{
  "connections": 50,
  "tmp": "/mnt/torrents"
}
```

The application stores its current state (list of torrents) in `torrents.json`

You can define configuration and state files location by `T-Flix_CONFIG_PATH` environmnt variable. Default value is `$HOME/.config/T-Flix-server/`.

You can also change the default port by setting `PORT` environment variable:

```sh
PORT=1234 T-Flix-server

# or on windows
SET PORT=1234
T-Flix-server
```


## Daemon

If you want to run T-Flix-server as a daemon, you can do it using [forever](https://github.com/foreverjs/forever):

```sh
npm install -g forever
```

```sh
forever start $(which T-Flix-server)
```

You might also want to enable logging -- see the [docs](https://github.com/foreverjs/forever#command-line-usage).

## FAQ

[How do I add password protection?](https://github.com/asapach/T-Flix-server/wiki/How-to-put-a-password-on-T-Flix-server)

## Development

See [Development.md](Development.md)

## REST API

See [REST.md](REST.md)

## Docker

See [Docker.md](Docker.md)

[npm-image]: https://img.shields.io/npm/v/T-Flix-server.svg?style=flat
[npm-url]: https://npmjs.org/package/T-Flix-server
[node-version-image]: https://img.shields.io/node/v/T-Flix-server.svg?style=flat
[node-version-url]: http://nodejs.org/download/
[travis-image]: https://img.shields.io/travis/asapach/T-Flix-server.svg?style=flat
[travis-url]: https://travis-ci.org/asapach/T-Flix-server
[downloads-image]: https://img.shields.io/npm/dm/T-Flix-server.svg?style=flat
[downloads-url]: https://npmjs.org/package/T-Flix-server

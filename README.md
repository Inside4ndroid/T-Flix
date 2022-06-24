T-Flix-server
===============

<img src="https://github.com/Inside4ndroid/T-Flix/raw/main/app/images/logo.png" alt="logo" height="200" width="200">

Streaming torrent client for node.js with web ui.

![screen capture](https://cdn.jsdelivr.net/gh/asapach/T-Flix-server@master/capture.gif)

Based on [torrent-stream](https://github.com/mafintosh/torrent-stream), inspired by [PeerFlix](https://github.com/asapach/peerflix-server).

## Usage

1. `git clone https://github.com/asapach/peerflix-server.git`
1. `npm install -g`
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

[How to put NCSA Auth password on peerflix server](https://github.com/Inside4ndroid/T-Flix/wiki/How-to-put-NCSA-Auth-password-on-peerflix-server)

[How to put a password on peerflix server using basic auth](https://github.com/Inside4ndroid/T-Flix/wiki/How-to-put-a-password-on-peerflix-server-using-basic-auth)
## Development

See [Development.md](Development.md)

## REST API

See [REST.md](REST.md)

## Docker

See [Docker.md](Docker.md)

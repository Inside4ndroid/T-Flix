Docker
========

`docker pull asapach/T-Flix-server`

Make sure that you have write permissions to your destination directory `/tmp/torrent-stream`:

```sh
mkdir /tmp/torrent-stream
chmod a+rw /tmp/torrent-stream/
```

`docker run -p 9000:9000 -p 6881:6881 -p 6881:6881/udp -d -v /tmp/torrent-stream:/tmp/torrent-stream asapach/T-Flix-server`

Or

`docker run -p 9000:9000 -p 6881:6881 -p 6881:6881/udp --rm -v /tmp/torrent-stream:/tmp/torrent-stream asapach/T-Flix-server`

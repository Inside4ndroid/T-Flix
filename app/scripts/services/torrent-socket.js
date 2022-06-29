//'use strict';

angular.module('t-flixServerApp')
  .factory('torrentSocket', function (socketFactory) {
    return socketFactory();
  });

'use strict';

angular.module('T-FlixServerApp')
  .factory('torrentSocket', function (socketFactory) {
    return socketFactory();
  });

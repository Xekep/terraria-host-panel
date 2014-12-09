<?php // Terraria Host Panel Configuration

// Server IP Address
define('KT_LOCAL_IP','127.0.0.1');

// Prefix for GNU-Screen names (prepended to username)
define('KT_SCREEN_NAME_PREFIX','ts-');

// Screen commands (these should never be modified)
define('KT_SCREEN_CMD_START',"tmux start-server; tmux attach || tmux new -d -s %s -n git; tmux send-keys -t %s:0 '/usr/bin/mono --server --gc=sgen -O=all TerrariaServer.exe -ip %s -port %s -world \"Terraria/Worlds/%s\" -maxplayers %s -killinactivesocket | tee server.log; tmux kill-session -t %s' C-m");
define('KT_SCREEN_CMD_EXEC','tmux send-keys -t %s:0 "%s$(printf \\\\r)"');
define('KT_SCREEN_DUMPLOG','cp /dev/null %s/server.log');
define('KT_SCREEN_CMD_KILL','tmux kill-session -t %s');
define('KT_SCREEN_CMD_KILLALL','tmux kill-server');
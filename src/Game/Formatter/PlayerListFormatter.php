<?php namespace Slackwolf\Game\Formatter;

/**
 * Defines the PlayerListFormatter class.
 */
class PlayerListFormatter
{
    /**
     * @param \Slack\User[] $players
     *
     * @return string
     */
    public static function format(array $players, $withRoles = false)
    {
        $playerList = [];

        foreach ($players as $player)
        {
            $str = '@'.$player->getDisplayName();

            if ($withRoles) {
                $str .= ' (' . $player->role->getName() . ')';
            }

            $playerList[] = $str;
        }

        return implode(', ', $playerList);
    }
}
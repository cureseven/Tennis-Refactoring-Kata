<?php

declare(strict_types=1);

namespace Tests;

use TennisGame\TennisGame1;

/**
 * TennisGame1 test case.
 */
class TennisGame1Test extends TestMaster
{
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new TennisGame1('player1', 'player2');
    }

    /**
     * @dataProvider data
     */
    public function testScores(int $score1, int $score2, string $expectedResult): void
    {
        // act
        $this->seedScores($score1, $score2);
        // assert
        $this->assertSame($expectedResult, $this->game->getScore());
    }
}

#!/usr/bin/env php
<?php

use Symfony\Component\Finder\Finder;

require('/tmp/vendor/autoload.php');
require_once '/tmp/vendor/codeception/codeception/autoload.php';

class Robofile extends \Robo\Tasks
{
    use \Codeception\Task\MergeReports;
    use \Codeception\Task\SplitTestsByGroups;

    public function splitTests($groupsCount, $projectRoot, $suite, $resultPath)
    {
        $this->taskSplitTestsByGroups($groupsCount)
            ->projectRoot($projectRoot)
            ->testsFrom('/' . $projectRoot . '/tests/' . $suite)
            ->groupsTo($resultPath)
            ->run();
    }

    public function splitFiles($groupsCount, $projectRoot, $suite, $resultPath)
    {
        $this->taskSplitTestFilesByGroups($groupsCount)
            ->projectRoot($projectRoot)
            ->testsFrom('tests/' . $suite)
            ->groupsTo($resultPath)
            ->run();
    }
}

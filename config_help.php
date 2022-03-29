<?php


function buildTask(array $taskData): array
{
    return [
        $taskData['CATEGORY'],
        $taskData['TITLE'],
        $taskData['EMAIL'],
        $taskData['TEXT']
    ];
}
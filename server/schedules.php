<?php

return [
    'schedules' => '일정',
    'manage-schedules' => '일정 관리',
    'create-schedule' => '일정 생성',
    'name' => '이름',
    'last-run-at' => '마지막 실행 시간',
    'next-run-at' => '다음 실행 시간',
    'status' => '상태',
    'active' => '활성화',
    'inactive' => '비활성화',
    'processing' => '처리 중',
    'manage-schedule' => '일정 관리',
    'new-task' => '새로운 작업',
    'run-now' => '지금 실행',
    'editBtn' => '편집',
    'n/a' => '없음',
    'never' => '결코',

    'no-schedules' => '이 서버에 구성된 일정이 없습니다.',
    'ignore-files-folders' => '무시되는 파일 및 폴더',
    'continues-on-failure' => '실패해도 계속',
    'later' => '나중에',

    'minute' => '분',
    'hour' => '시간',
    'day' => '일',
    'week' => '주',
    'day-of-month' => '월의 날짜',
    'month' => '월',
    'day-of-week' => '요일',

    'deleteTask' => [
        'title' => '작업 삭제 확인',
        'description' => '이 작업을 삭제하시겠습니까? 이 작업은 복원할 수 없는 작업입니다.',
        'delete' => '작업 삭제'
    ],
    'delete' => [
        'title' => '일정 삭제',
        'description' => '모든 작업이 제거되고 실행 중인 모든 프로세스가 종료됩니다.',
        'delete' => '삭제'
    ],
    'edit' => [
        'title-1' => '일정 편집',
        'title-2' => '새로운 일정 생성',

        'description' => '일정 시스템은 작업이 언제 시작되어야 하는지 정의할 때 Cron 작업 구문을 지원합니다. 이 작업이 언제 시작되어야 하는지 지정하려면 위의 필드를 사용하십시오.',
        
        'name' => '일정 이름',
        'name-description' => '이 일정을 식별하는 사람이 읽기 쉬운 식별자.',
        'cheatsheet' => '치트시트 표시',
        'cheatsheet-description' => '일부 예제의 크론 치트 시트를 표시합니다.',
        'online-when-online' => '서버가 온라인 일 때만',
        'online-when-online-description' => '서버가 실행 중인 상태에서만이 일정이 실행됩니다.',
        'enabled' => '일정 활성화',
        'enabled-description' => '활성화된 경우이 일정은 자동으로 실행됩니다.',

        'save-changes' => '변경 사항 저장',
    ],
    'cheatsheet' => [
        'example' => '예시',
        'every-5-minutes' => '매 5분마다',
        'every-hour' => '매 시간마다',
        'hour-range' => '시간 범위',
        'once-a-day' => '하루에 한 번',
        'every-monday' => '매주 월요일',
        'special-characters' => '특수 문자',
        'any-value' => '아무 값이나',
        'value-list-separator' => '값 목록 구분 기호',
        'range-values' => '범위 값',
        'step-values' => '간격 값',
    ],
    'task' => [
        'message' => '서버의 백업 제한이 0으로 설정되어 있을 때 백업 작업을 만들 수 없습니다.',
        'edit-task' => '작업 편집',
        'save-changes' => '변경 사항 저장',
        'create-task' => '작업 생성',
        'action' => '동작',
        'send-command' => '명령 보내기',
        'send-power-action' => '전원 동작 보내기',
        'create-backup' => '백업 생성',
        'offset' => '시간 오프셋 (초 단위)',
        'offset-description' => '이전 작업이 실행된 후 이 작업을 실행하기 전에 기다릴 시간입니다. 이 일정의 첫 번째 작업인 경우 이 규칙이 적용되지 않습니다.',
        'payload' => '페이로드',
        'ignored-files' => '무시된 파일',
        'ignored-files-description' => '선택 사항입니다. 이 백업에서 제외할 파일 및 폴더를 포함합니다. 기본적으로 .pteroignore 파일의 내용이 사용됩니다. 백업 한도에 도달한 경우 가장 오래된 백업이 로테이트됩니다.',
        'start-server' => '서버 시작',
        'stop-server' => '서버 정지',
        'restart-server' => '서버 다시 시작',
        'kill-server' => '서버 종료',
        'continue-on-failure' => '실패해도 계속',
        'continue-on-failure-description' => '이 작업이 실패하면 향후 작업이 실행됩니다.',
    ],
];

<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testError(): void
    {
		$test = Email::test("test");
    }
}

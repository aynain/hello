<?php
namespace tests\Unit\ReviewExpense\ReviewExpenseControllerTest;
use App\Http\Controllers\ReviewExpenseController;
use Mockery;
use Tests\TestCase;
class ReviewExpenseControllerTest extends TestCase
{
    public function test_review_expense_controller_show_data()
    {
        $expected = array(
            'amount' => '14000.0',
            'description' => 'expense deatil',
            'spent_at' => 'bill',
            'spent_on' => '2019-1-2',
            'account_id' => '14556627273'
        );
        $mock = Mockery::mock(ReviewExpenseController::class);
        $mock->shouldReceive('showData')
            ->once()->andReturn($expected);

        $task = $mock->showData();
        $task1 = json_encode($task);
        $data = json_decode($task1);
        $this->assertEquals($expected['amount'], $data->amount);
    }

}

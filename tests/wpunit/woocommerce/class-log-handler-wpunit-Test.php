<?php

namespace BrianHenryIE\WC_Logger;

/**
 * @coversDefaultClass \BrianHenryIE\WC_Logger\Log_Context_Handler
 */
class Log_Handler_WPUnit_Test extends \Codeception\TestCase\WPTestCase {

	/**
	 * @covers ::add_context_to_logs
	 */
	public function test_context_is_added_for_errors(): void {

		$settings = $this->makeEmpty(
			WC_Logger_Settings_Interface::class,
			array(
				'get_log_level'   => 'info',
				'get_plugin_slug' => 'test-plugin',
			)
		);

		$sut = new Log_Context_Handler( $settings );

		$entry          = 'Log message';
		$log_data_array = array(
			'timestamp' => time(),
			'level'     => 'error',
			'message'   => 'Log message',
			'context'   => array(
				'source'       => 'test-plugin',
				'more_context' => 'data',
			),
		);

		$result = $sut->add_context_to_logs( $entry, $log_data_array );

		$this->assertStringContainsString( 'more_context', $result );
	}
}

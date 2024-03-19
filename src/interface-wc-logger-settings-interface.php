<?php

namespace BrianHenryIE\WC_Logger;

interface WC_Logger_Settings_Interface
{
	public function get_plugin_slug();

	public function get_log_level();
}
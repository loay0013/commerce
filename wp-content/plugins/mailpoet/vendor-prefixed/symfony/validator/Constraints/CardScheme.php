<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
class CardScheme extends Constraint
{
 public const NOT_NUMERIC_ERROR = 'a2ad9231-e827-485f-8a1e-ef4d9a6d5c2e';
 public const INVALID_FORMAT_ERROR = 'a8faedbf-1c2f-4695-8d22-55783be8efed';
 protected static $errorNames = [self::NOT_NUMERIC_ERROR => 'NOT_NUMERIC_ERROR', self::INVALID_FORMAT_ERROR => 'INVALID_FORMAT_ERROR'];
 public $message = 'Unsupported card type or invalid card number.';
 public $schemes;
 public function getDefaultOption()
 {
 return 'schemes';
 }
 public function getRequiredOptions()
 {
 return ['schemes'];
 }
}

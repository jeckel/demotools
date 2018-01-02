<?php
namespace DemoTools;

/**
 * Add color constants
 */
interface Color
{
    const RED         = "\033[0;31m";
    const GREEN       = "\033[0;32m";
    const ORANGE      = "\033[0;33m";
    const BLUE        = "\033[0;34m";
    const PURPLE      = "\033[0;35m";
    const CYAN        = "\033[0;36m";

    const RED_BOLD    = "\033[0;31m\033[1m";
    const GREEN_BOLD  = "\033[0;32m\033[1m";
    const ORANGE_BOLD = "\033[0;33m\033[1m";
    const BLUE_BOLD   = "\033[0;34m\033[1m";
    const PURPLE_BOLD = "\033[0;35m\033[1m";
    const CYAN_BOLD   = "\033[0;36m\033[1m";

    const NC          = "\033[0m"; # No Color
    const BOLD        = "\033[1m";
    const NEGATIV     = "\033[7m";
}

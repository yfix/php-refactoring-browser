<?php
/**
 * Qafoo PHP Refactoring Browser
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

namespace QafooLabs\Refactoring\Application;

use QafooLabs\Refactoring\Domain\Model\Directory;

class FixClassNames
{
    private $codeAnalysis;
    private $editor;

    public function __construct($codeAnalysis, $editor)
    {
        $this->codeAnalysis = $codeAnalysis;
        $this->editor = $editor;
    }

    public function refactor(Directory $directory)
    {
        $phpFiles = $directory->findAllPhpFilesRecursivly();

        $renamedNamespaces = array();
        $renamedClasses = array();

        foreach ($phpFiles as $phpFile) {
            $classes = $this->codeAnalysis->findClasses($phpFile);

            if (count($classes) !== 1) {
                continue;
            }

            $class = $classes[0];
            $phpFileShortname = 
            $classShortname = 

            if ($phpFileShortname !== $classShortname) {
                $line = $class->getDeclarationLine();

                $this->editor->replaceString($phpFile, $line, $classShortname, $phpFileShortname);
            }

            $phpFileNamespace = ;
            $classNamespace = ;

            if ($phpFileNamespace !== $classNamespace) {
                $namespaceDeclarationLine = ...

                $this->editor->replaceString($phpFile, $namespaceDeclarationLine, $classNamespace, $phpFileNamespace);
            }
        }
    }
}

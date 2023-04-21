<?php

declare(strict_types=1);

namespace PhpCsFixer\Fixer\Basic;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Tokens;

use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\Tokenizer\Token;

final class CamelCaseVariableNameFixer extends AbstractFixer
{
    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition(
            'Variable names MUST be in camelCase.',
            []
        );
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return true;
    }

    protected function applyFix(\SplFileInfo $file, Tokens $tokens): void
    {
        foreach ($tokens as $index => $token) {
            if ($token->isGivenKind(T_VARIABLE)) {
                $name = ltrim($token->getContent(), '$');
                $name = preg_replace_callback(
                    '/_(.?)/',
                    function ($matches) {
                        return strtoupper($matches[1]);
                    },
                    $name
                );
                $name = lcfirst($name);

                $tokens[$index] = new Token([$token->getId(), '$' . $name]);
            }
        }
    }
}

<?php

namespace DoctrineExtensions\Query\Oracle;

use Doctrine\ORM\Query\Lexer,
    Doctrine\ORM\Query\AST\Functions\FunctionNode;

/**
 * @author Mohammad ZeinEddin <mohammad@zeineddin.name>
 */
class Trunc extends FunctionNode
{
    private $date;
    private $fmt;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        return sprintf(
                'TRUNC(%s, %s)',
                $sqlWalker->walkArithmeticPrimary($this->date),
                $sqlWalker->walkArithmeticPrimary($this->fmt));
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->date = $parser->ArithmeticExpression();
        $parser->match(Lexer::T_COMMA);
        $this->fmt = $parser->StringExpression();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
<?php
class DichotomySort
{
    public function main(array $array)
    {
        $length = count($array);
        if ($length <= 1) {
            return $array;
        }

        $root = new Node($array[0]);
        for ($i = 1; $i < $length; $i++) {
            $new_node = new Node($array[$i]);
            if ($root->getValue() >= $new_node->getValue()) {
                $root = $this->goLeft($root, $new_node);
            } else {
                $this->goRight($root, $new_node);
            }
        }
        return $this->allNode($root);
    }

    private function allNode(Node $node): array
    {
        $array = [];
        while (!is_null($node)) {
            $array[] = $node->getValue();
            $node = $node->getRight();
        }
        return $array;
    }

    private function goLeft($node, $new_node)
    {
        if (is_null($node->getLeft())) {
            $node->setLeft($new_node);
            $new_node->setRight($node);
            return $new_node;
        }

        if ($node->getLeft()->getValue() < $new_node->getValue()) {
            $left_node = $node->getLeft();
            $left_node->setRight($new_node);
            $node->setLeft($new_node);
            $new_node->setRight($node);
            $new_node->setLeft($left_node);
            return $left_node;
        }
        return $this->goLeft($node->getLeft(), $new_node);
    }

    private function goRight($node, $new_node)
    {
        if (is_null($node->getRight())) {
            $node->setRight($new_node);
            $new_node->setLeft($node);
            return $new_node;
        }
        if ($node->getRight()->getValue() >= $new_node->getValue()) {
            $right_node = $node->getRight();
            $node->getRight()->setLeft($new_node);
            $new_node->setRight($right_node);
            $new_node->setLeft($node);
            $node->setRight($new_node);
            return $right_node;
        }
        return $this->goRight($node->getRight(), $new_node);
    }
}

class Node
{
    protected int $value;
    protected $left = null;
    protected $right = null;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param Node $left
     */
    public function setLeft(Node $left): void
    {
        $this->left = $left;
    }

    /**
     * @param Node $right
     */
    public function setRight(Node $right): void
    {
        $this->right = $right;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }


}


function test(array $array)
{
    print_r((new DichotomySort)->main($array));
}

$array = [2,4, 5,2,5,7,34,7,9,4,6,0,2];
test($array);

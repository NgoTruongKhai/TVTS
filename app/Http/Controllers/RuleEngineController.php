<?php

class RuleEngine
{
    private $rules; // Danh sách các quy tắc luật
    private $facts; // Danh sách các sự kiện đầu vào
    private $inferredFacts; // Danh sách các sự kiện đã được suy diễn

    public function __construct()
    {
        $this->rules = [];
        $this->facts = [];
        $this->inferredFacts = [];
    }

    public function addRule($hypotheses, $conclusion)
    {
        $rule = [
            'hypotheses' => $hypotheses,
            'conclusion' => $conclusion
        ];
        $this->rules[] = $rule;
    }

    public function addFact($fact)
    {
        $this->facts[] = $fact;
    }

    public function infer()
    {
        $newInferredFacts = $this->facts;

        do {
            $inferenceChanged = false;

            // Lặp qua các sự kiện đã suy diễn trước đó
            foreach ($newInferredFacts as $inferredFact) {
                // Kiểm tra các luật có thể áp dụng cho sự kiện đã suy diễn
                $matchedRules = $this->matchRules($inferredFact);

                // Áp dụng luật và thêm kết quả suy diễn vào danh sách sự kiện mới
                foreach ($matchedRules as $matchedRule) {
                    $conclusion = $matchedRule['conclusion'];
                    if (!in_array($conclusion, $newInferredFacts) && !in_array($conclusion, $this->inferredFacts)) {
                        $newInferredFacts[] = $conclusion;
                        $inferenceChanged = true;
                    }
                }
            }

            // Thêm các sự kiện suy diễn mới vào danh sách tổng hợp
            $this->inferredFacts = array_merge($this->inferredFacts, $newInferredFacts);
        } while ($inferenceChanged);
    }

    private function matchRules($fact)
    {
        $matchedRules = [];

        foreach ($this->rules as $rule) {
            $hypotheses = $rule['hypotheses'];
            $match = true;

            foreach ($hypotheses as $key => $value) {
                if (!array_key_exists($key, $fact) || $fact[$key] != $value) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $matchedRules[] = $rule;
            }
        }

        return $matchedRules;
    }

    public function getInferredFacts()
    {
        return $this->inferredFacts;
    }
}

// Sử dụng hệ suy diễn tiến

// Tạo đối tượng hệ suy diễn
$ruleEngine = new RuleEngine();

// Thêm các quy tắc luật
$ruleEngine->addRule(['Sở thích' => 'Khoa học tự nhiên'], 'Khoa học tự nhiên');
$ruleEngine->addRule(['Sở thích' => 'Nghệ thuật'], 'Mỹ thuật');
$ruleEngine->addRule(['Sở thích' => 'Kinh doanh', 'Học lực' => 'Giỏi'], 'Quản trị kinh doanh');
$ruleEngine->addRule(['Sở thích' => 'Kinh doanh', 'Học lực' => 'Khá'], 'Marketing');
$ruleEngine->addRule(['Sở thích' => 'Khoa học xã hội'], 'Khoa học xã hội');
$ruleEngine->addRule(['Khả năng' => 'Năng động', 'Sở thích' => 'Thể thao'], 'Giáo dục thể chất');
$ruleEngine->addRule(['Khả năng' => 'Logic', 'Sở thích' => 'Toán học'], 'Toán học');

// Thêm các sự kiện đầu vào
$ruleEngine->addFact(['Sở thích' => 'Kinh doanh']);
$ruleEngine->addFact(['Học lực' => 'Giỏi']);

// Suy diễn
$ruleEngine->infer();

// Lấy danh sách các sự kiện đã suy diễn
$inferredFacts = $ruleEngine->getInferredFacts();

// In kết quả suy diễn
echo "Các sự kiện đã suy diễn:\n";
foreach ($inferredFacts as $fact) {
    foreach ($fact as $key => $value) {
        echo $key . ': ' . $value . "\n";
    }
    echo "\n";
}

// In danh sách quy tắc luật để kiểm tra
// echo "\nDanh sách quy tắc luật:\n";
// foreach ($ruleEngine->getRules() as $rule) {
//     echo "Giả thuyết: " . json_encode($rule['hypotheses']) . "\n";
//     echo "Kết luận: " . $rule['conclusion'] . "\n\n";
// }

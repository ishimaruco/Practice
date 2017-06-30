package main

import (
"testing"
"github.com/stretchr/testify/assert"
)

func TestSampleFunc(t *testing.T) {
	// assert.True( t, true)
	assert.Equal(t, 123, 123, "数字が同じであること")

	assert.NotEqual(t, 123, 456, "数字が違うこと")

	assert.NotNil(t, bot ,"オブジェクトがNilでないこと")

}
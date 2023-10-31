import { useState } from "react";
import { styled } from "styled-components";
import { HiOutlineMagnifyingGlass } from "react-icons/hi2";

const InputContainer = styled.div`
    text-align: right;
    direction: rtl;
`;

const StyledInput = styled.input`
    width: 100%;
    font-size: 1.3rem;
    font-weight: 500;
    color: var(--color-green-600);
    padding: 1rem;
    transition: all 0.2s;
    background-color: var(--color-green-100);
    border-radius: 6px;
    border: none;

    &:focus {
        color: var(--color-green-500);
        background-color: var(--color-green-200);
        outline: none;
    }

    &::placeholder {
        color: var(--color-green-600);
    }
`;

const Icon = styled.div`
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-35%);
`;

const Container = styled.div`
    position: relative;
`;

function Search() {
    const [value, setValue] = useState("");
    return (
        <InputContainer>
            <Container>
                <StyledInput
                    value={value}
                    onChange={(e) => setValue(e.target.value)}
                    placeholder="جستجو"
                />
                <Icon>
                    <HiOutlineMagnifyingGlass
                        strokeWidth="3"
                        color="var(--color-green-600)"
                        size={15}
                    />
                </Icon>
            </Container>
        </InputContainer>
    );
}

export default Search;
